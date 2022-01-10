<?php
/*
    Template Name: Template Merchandise
*/
?>

<?php get_header();?>
    

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center merch">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal"><?php the_title() ?></h1>
        </div>
    </div>
    <!-- Bagian Blog -->
    <div class="container blog">
        <div class="row">
        <!-- Konten -->
            <div class="col-lg-12">
                <?php the_content(); ?>
            </div>
        </div>
        <hr>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
            
            

<?php get_footer() ?>