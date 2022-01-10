<!-- Sidebar -->
<div class="col-lg-4 p-4" style="border: 1px solid rgba(0,0,0,0.1);">
    <div class="sidebar">
        <div class="text-center">
            <?php get_search_form() ?>
        </div>

        <!-- Info dari Dara -->
        <div class="wp-loop">
            <?php if(is_single() && !(in_category('am'))) : ?>
                <hr style="margin-top: 25px">

                <h3 class="text-center" style="font-weight: bolder;">Info dari Dara</h3>

            <?php
            $infoDara = new WP_Query('cat=13&posts_per_page=2');
            
            if($infoDara->have_posts()) : ?>
                <?php while($infoDara->have_posts()) : $infoDara->the_post(); ?>
            <!-- Thumbnail Kecil -->
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-xs-4">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail('square-thumb', array('class' => 'img-thumbnail mx-auto d-block'));
                    }else{ ?>
                    <img src="<?php bloginfo('template_url') ?>/img/thumbnail-1.jpg" alt="" class="img-thumbnail mx-auto d-block">
                    <?php }?>
                </div>

                <!-- Judul Kecil -->
                <div class="col-xs-8 judul-kecil">
                    <h5 class="mt-3 ml-3">
                        <a  href="<?php the_permalink(); ?>" class="judul-konten"><?php the_title(); ?></a>
                    </h5>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
        endif;

            ?>
        </div>
        <hr style="margin-bottom: 25px">
        
        <!-- Widget -->
        <div class=''>
        <?php
            if(is_active_sidebar('sidebar')) : 
            dynamic_sidebar('sidebar');
            endif;
        ?>
        
        </div>
    </div>
</div>