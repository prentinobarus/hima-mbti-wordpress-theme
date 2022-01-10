<?php get_header() ?>

    <!-- Bagian Blog -->
    <div class="container blog">
        <div class="row">
            <!-- Konten -->
            <div class=" col-lg-12">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                <!-- Thumbnail Konten -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('content-img', array('class' => 'img-thumbnail mx-auto d-block'));
                        }else{ ?>
                        <img src="<?php bloginfo('template_url') ?>/img/thumbnail-1.jpg" alt="" style="height: 290px; width: 290px;" class="img-thumbnail mx-auto d-block">
                        <?php }?>
                    </div>
                </div>

                <!-- Konten -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center judul-konten">
                           <?php the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <hr>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            

<?php get_footer() ?>