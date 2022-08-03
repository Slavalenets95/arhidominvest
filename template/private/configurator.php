<?php
    class Configurator {
        private $customPosts;
        private $customTaxs;

        public function addActions() {
            add_action('init', array($this, 'registerCustomPosts'));
            add_action('init', array($this, 'registerCustomTaxs'));
        }

        public function registerCustomPosts() {
        $this->customPosts = get_field('custom_post_type_repeater', 'option');

        if($this->customPosts) {
            foreach ($this->customPosts as $customPost) {
                list(
                    'custom_posts_name'   => $customPostName,
                    'custom_posts_slug'   => $customPostSlug,
                    'custom_posts_config' => $supports
                    ) = $customPost;
                $supports = $this->getSettings($supports);

                register_post_type( $customPostSlug, [
                    'label'  => $customPostName,
                    'labels' => [
                        'name'               => $customPostName,
                        'singular_name'      => $customPostName,
                        'menu_name'          => $customPostName,
                    ],
                    'public'              => true,
                    'show_in_menu'        => true,
                    'menu_icon'           => null,
                    'supports'            => $supports,
                    'has_archive'         => true,
                    'rewrite'             => true,
                    'query_var'           => true,
                ] );
            }
        }
    }

        public function registerCustomTaxs() {
        $this->customTaxs = get_field('custom_taxs_repeater', 'option');
        
        if($this->customTaxs) {
            foreach ($this->customTaxs as $tax) {

                list(
                    'tax_name'           => $taxName,
                    'tax_slug'           => $taxSlug,
                    'hierarchical_tax'   => $hierarchical,
                    'tax_posts_repeater' => $taxFor,
                    'plural_tax_name'    => $pluralTaxName,
                    ) = $tax;
                $taxFor = $this->getSettings($taxFor);
                $hierarchical = (int)$hierarchical;
                $hierarchical = (bool)$hierarchical;
                
                register_taxonomy( $taxSlug, $taxFor, [
                    'label'                 => $taxName,
                    'labels'                => [
                        'name'              => $taxName,
                        'singular_name'     => $pluralTaxName,
                        'menu_name'         => $taxName,
                    ],
                    'public'                => true,
                    'hierarchical'          => $hierarchical,
                ] );
            }
        }
    }

        private function getSettings(array $array = []) {
        if(!$array) return false;

        $result = [];

        foreach ($array as $v) {
            if(isset($v[0])) $result[] = $v[0];
            if(isset($v['tax_post_type'])) $result[] = $v['tax_post_type'];
        }

        return $result;
    }

    }

    (new Configurator())->addActions();