<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name') ?>
        <?php 
            if(is_single()){
                echo " | ";
                the_title();
            }elseif(is_front_page()){
                echo " ";
            }elseif(is_page() || is_page('artikel')){
                echo " | ";
                the_title();
            }elseif(is_archive()){
                if(is_category()){
                    single_cat_title();
                }elseif(is_tag()){
                    single_tag_title();
                }elseif(is_author()){
                    the_post();
                    echo get_the_author();
                }elseif(is_day()){
                    echo "Postingan pada: ".get_the_date();
                }elseif(is_month()){
                    echo "Postingan pada: ".get_the_date('F Y');
                }elseif(is_year()){
                    echo "Postingan pada: ".get_the_date('Y');
                }else{
                    echo "Arsip";
                }
            }
        ?>
    </title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon.ico"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- Top Navbar -->
    <div class="topnav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" role="navigation">
                <a class="navbar-brand" href="<?= home_url(); ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/LOGO WEB 2.png" alt="" class="d-inline-block align-top" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mx-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
            </nav>
        </div>
    </div>