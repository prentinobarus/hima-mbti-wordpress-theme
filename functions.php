<?php
    require_once('class-wp-bootstrap-navwalker.php');

    function wpb_theme_setup(){
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

        add_theme_support('post-thumbnails');
        add_image_size('square-thumb', 300, 300, true);
        add_image_size('content-img', 500, 500);

    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    //panjang excerpt
    function set_excerpt_length(){
        return 40;
    }

    add_filter('excerpt_length','set_excerpt_length');


    //Widget Location
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name'      =>  'Sidebar',
            'id'        =>  'sidebar',
            'before_widget' =>  '<div class="sidebar-module">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4>',
            'after_title'  =>  '</h4>',
        ));

        // VISI
        register_sidebar(array(
            'name'      =>  'Visi',
            'id'        =>  'visi',
            'before_widget' =>  '<div class="box-visi">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h2 class="text-center">',
            'after_title'  =>  '</h2>',
        ));

        // MISI
        register_sidebar(array(
            'name'      =>  'Misi',
            'id'        =>  'misi',
            'before_widget' =>  '<div class="box-misi">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h2 class="text-center">',
            'after_title'  =>  '</h2>',
        ));

        // Instagram
        register_sidebar(array(
            'name'      =>  'Instagram (Beranda)',
            'id'        =>  'instagram',
            'before_widget' =>  '<div class="instagram">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h2 class="text-center">',
            'after_title'  =>  '</h2>',
        ));

        // Twitter
        register_sidebar(array(
            'name'      =>  'Twitter (Beranda)',
            'id'        =>  'twitter',
            'before_widget' =>  '<div class="twitter">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h2 class="text-center">',
            'after_title'  =>  '</h2>',
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');


    //Exclude pages from WordPress Search
    if (!is_admin()) {
            function wpb_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
        }
        add_filter('pre_get_posts','wpb_search_filter');
    }