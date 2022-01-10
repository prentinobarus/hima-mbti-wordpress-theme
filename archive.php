<?php get_header() ?>

    <!-- Bagian Blog -->
    <div class="container blog">
        <div class="row">
            <!-- Konten -->
            <div class="col-lg-8">
            
            <h1 class="text-center" style="; font-weight: bolder;">
                    <?php

                        if(is_category()){
                            echo "Kategori: ";
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

                    ?>
                    </h1>
                    <hr>
                <?php

                $args = array(
                    'posts_per_page' =>3,
                    'paged' => get_query_var('paged'),
                );
                
                $query = new WP_Query($args);
                if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                <div class="row">
                    <!-- Thumbnail Konten -->
                    <div class="col-lg-4">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('square-thumb', array('class' => 'img-thumbnail mx-auto d-block'));
                        }else{ ?>
                        <img src="<?php bloginfo('template_url') ?>/img/thumbnail-1.jpg" alt="" class="img-thumbnail mx-auto d-block">
                        <?php }?>
                    </div>

                    <!-- Excerpt -->
                    <div class="col-lg-8 text-center">
                        <h1>
                            <a href="<?php the_permalink(); ?>" class="judul-konten"><?php the_title(); ?></a>
                        </h1>
                        <p class="meta">
                            <?php the_time('F j, Y') ?>
                            oleh 
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>. 
                            Kategori:  
                            <?php
                                $categories = get_the_category();
                                $separator = ', ';
                                $output = '';

                                if($categories){
                                    foreach($categories as $kategori){
                                        $output .= '<a href="'.get_category_link($kategori->term_id).'">'.$kategori->cat_name.'</a>'. $separator;
                                    }
                                    echo trim($output, $separator);
                                }
                            ?>
                        </p>
                        <div class="isi">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    else : ?>
                        <h3 class="text-center" style="font-weight: bold; color:#bf3939">Tidak ada postingan.</h3>
                <?php
                endif;
                ?>

                <div class="text-center paging" style="font-size: 18px; margin-bottom: 50px;">
                    <?= paginate_links() ?>
                </div>
            </div>

            <!-- Sidebar -->
            <?php get_template_part('side') ?>

<?php get_footer() ?>