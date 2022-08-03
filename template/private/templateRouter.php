<?php
    class TemplateRouter {
        private $defaultTemplates;
        private $sectionTemplates;

        public function run () {
            $this->setTemplateNames();

            //$this->router();
            $templates = get_posts( array (
                'post_type' => 'templates_type',
                'post_per_page' => -1,
                'numberposts'   => -1,
            ));
            
            $thisPostTaxonomy = [];
            $intersect = [];
            $pageTemplateId = [];
            $thisType = get_post_type();
    
            $taxonomies = array_filter( get_taxonomies([
                'public' => true,
            ]), function($taxonomy) {
                return $taxonomy !== 'post_format';
            });
    
            ## Получает массив id таксономий текущей страницы
            foreach($taxonomies as $taxonomy) {
                if(!is_archive() || is_tax()) {
                    $terms = get_the_terms(get_the_ID(), $taxonomy);
                }
                if($terms) {
                    foreach($terms as $term) :
                        $thisPostTaxonomy[] = $term -> term_id;
                    endforeach;
    
                }
            }
            ## Возвращает таксономии шаблона
            function getTaxTemplate() {
                $termRepeater = get_field('templates_group_tax')['templates_term'];
                $termValues = [];
    
                if(is_array($termRepeater)) {
                    foreach($termRepeater as $term) {
                        $termValues[] = $term['templates_term_in'];
                    }
                }
    
                return $termValues;
    
            }
            ## Подходящий id шаблона для текущей страницы
            global $post;
            foreach($templates as $post) {
                setup_postdata($post);
                $templateType = get_field('templates_post_type')['templates_post_type_in'] ? get_field('templates_post_type')['templates_post_type_in'] : [];
                $templateType = in_array($thisType, $templateType);
                $activity = get_field('templates_on');
                $isArchive = get_field('templates_arc');
                $isHeaderFooterTemplate = get_field('templates_header_footer') === 'none';
                if($templateType && $activity && ( $isArchive === is_archive() ) && $isHeaderFooterTemplate) {
    
                    $pageTemplateId = $post->ID;
                    $intersect[$post->ID] = array_intersect(getTaxTemplate(), $thisPostTaxonomy); 
                    
                }
            }
            wp_reset_postdata();
            ## Cамое большое количество совпадений
            if(count($intersect)) {
                $larges = array_map(function($el) {
                    return count($el);
                }, $intersect);
                $pageTemplateId = array_search(max($larges), $larges);
                if(is_archive() && !is_tax()) $pageTemplateId = 635;
            }
            
            
            if($pageTemplateId) setup_postdata(get_post($pageTemplateId));
            
            if($pageTemplateId) {	
                $this->router($pageTemplateId);
            }
            elseif(!is_archive()) {
                $this->router(get_the_id());
            } else {
                echo '<div class="container"><p>Шаблон или конструктор пуст</p></div>';
            }
            wp_reset_postdata();
        }

        private function setTemplateNames () {
            $this->defaultTemplates = array_diff( scandir(get_template_directory() . '/templates/defaultTemplates' ), array( '..', '.' ));
            $this->sectionTemplates = array_diff( scandir(get_template_directory() . '/templates/sectionTemplates' ), array( '..', '.' ));
        }

        private function checkDefaultTemplate ( string $name ) {
            return (bool)(array_search( $name, $this->defaultTemplates ));
        }

        private function checkSectionTemplate ( string $name ) {
            return (bool)(array_search( $name, $this->sectionTemplates ));
        }

        private function getSectionTemplate ( string $name ) {
            $args = array(
				'post_type'   => 'section_templates',
				'post_status' => 'publish',
				's'  => $name,
			);
            $templateSection = get_posts( $args );
            
            return $templateSection ? $templateSection : false;
        }

        private function router ( $postId = false ) {
            $postId = $postId ? $postId : get_the_id();

            if( have_rows( 'section', $postId ) ) {
                
                while( have_rows( 'section', $postId ) ) { the_row();
                    $classes = get_sub_field('css_classes');
?>
                    <div class="<?= $classes ?>">
<?php
                    if( have_rows('constructor', $postId) ) {

                        while( have_rows('constructor', $postId) ) { the_row();
                            $layoutName = get_row_layout();
                            
                            if ( $this->checkDefaultTemplate( $layoutName ) ) {
                                get_template_part( '/templates/defaultTemplates/' . get_row_layout() . '/' . get_row_layout() );
                                continue;
                            } 
                            elseif ( $this->getSectionTemplate( $layoutName ) ) {
                                $this->displaySectionTemplate( $this->getSectionTemplate( $layoutName ) );
                            }
                            
                        }
        
                    }
                    else {
                        echo '<div class="container">Конструктор пуст</div>';
                    }
?>
                    </div>
<?php

                }

            } 
            else {
                echo 123;
            }
        }

        private function displaySectionTemplate ( array $section ) {
            foreach( $section as $post ) {
                setup_postdata( $post );
                $templateFileName = get_field( 'template_file_name', $post );

                if( $templateFileName && $this->checkSectionTemplate($templateFileName) ) {
                    get_template_part( '/templates/sectionTemplates' . $templateFileName . '/' . $templateFileName );
                }
                else {
                    $this->router( $post->ID );
                }
            }
        }

        private function getTaxTemplate() {
			$termRepeater = get_field('templates_group_tax')['templates_term'];
			$termValues = [];

			if(is_array($termRepeater)) {
				foreach($termRepeater as $term) {
					$termValues[] = $term['templates_term_in'];
				}
			}

			return $termValues;

		}
    }