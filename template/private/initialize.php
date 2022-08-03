<?php
    class Initialize {

        public function run() {
            add_action('init', array($this, 'createTemplatePosts'));
        }

        public function createTemplatePosts () {
            ##  Регистрирует Кастомный тип записи - Шаблоны страниц
	        register_post_type('templates_type', array(
	        	'labels'             => array(
	        		'name'               => 'Шаблоны страниц',
	        		'singular_name'      => 'Шаблон страницы', 
	        		'add_new'            => 'Добавить шаблон страницы',
	        		'add_new_item'       => 'Добавить новый шаблон страницы',
	        		'edit_item'          => 'Редактировать шаблон страницы',
	        		'new_item'           => 'Новый шаблон страницы',
	        		'view_item'          => 'Посмотреть шаблон страницы',
	        		'search_items'       => 'Найти шаблон страницы',
	        		'not_found'          => 'Шаблонов страниц не найдено',
	        		'not_found_in_trash' => 'В корзине шаблонов страниц не найдено',
	        		'parent_item_colon'  => '',
	        		'menu_name'          => 'Шаблоны страниц'
                
	        	  ),
	        	'public'             => true,
	        	'publicly_queryable' => true,
	        	'show_ui'            => true,
	        	'show_in_menu'       => true,
	        	'query_var'          => true,
	        	'rewrite'            => true,
	        	'capability_type'    => 'post',
	        	'has_archive'        => true,
	        	'hierarchical'       => false,
	        	'menu_position'      => 101,
	        	'show_in_rest'       => true,
	        	'supports'           => array('title', 'editor'),
	        ) );
            ##  Регистрирует Кастомный тип записи - Шаблоны секций
	        register_post_type('section_templates', array(
	        	'labels'             => array(
	        		'name'               => 'Шаблоны секций', // Основное название типа записи
	        		'singular_name'      => 'Шаблон секции', // отдельное название записи типа Book
	        		'add_new'            => 'Добавить шаблон секции',
	        		'add_new_item'       => 'Добавить новый шаблон секции',
	        		'edit_item'          => 'Редактировать шаблон секции',
	        		'new_item'           => 'Новый шаблон секции',
	        		'view_item'          => 'Посмотреть шаблон секции',
	        		'search_items'       => 'Найти шаблон секции',
	        		'not_found'          => 'Шаблонов секций не найдено',
	        		'not_found_in_trash' => 'В корзине шаблонов секций не найдено',
	        		'parent_item_colon'  => '',
	        		'menu_name'          => 'Шаблоны секций'

	        	  ),
                'menu_position'      => 10,
	        	'public'             => true,
	        	'publicly_queryable' => true,
	        	'show_ui'            => true,
	        	'show_in_menu'       => true,
	        	'query_var'          => true,
	        	'rewrite'            => true,
	        	'capability_type'    => 'post',
	        	'has_archive'        => true,
	        	'hierarchical'       => false,
	        	'menu_position'      => 102,
	        	'show_in_rest'       => true,
	        	'supports'           => array('title', 'editor')
	        ) );
        }

    }

    (new Initialize)->run();