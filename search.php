<?php get_header() ?>

    <!-- Bagian Blog -->
    <div class="container blog">
        <div class="row">
            <!-- Konten -->
            <div class="col-lg-12">
                <h2 class="text-center" style="font-weight: bolder; margin-bottom: 25px;">Hasil pencarian : <span style="color:#bf3939"><?php the_search_query() ?></span></h2>
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                <div class="row">
                    <!-- Thumbnail Konten -->
                    <div class="col-lg-4">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('square-thumb', array('class' => 'img-thumbnail mx-auto d-block'));
                        }else{ ?>
                        <img src="<?php bloginfo('template_url') ?>/img/thumbnail-1.jpg" alt="gambar-default" style="height: 290px; width: 290px;" class="img-thumbnail mx-auto d-block">
                        <?php }?>
                    </div>

                    <!-- Excerpt -->
                    <div class="col-lg-8 my-auto">
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
                                
                        </div>
                    </div>
                </div>
                <hr>
                <?php
                    endwhile;
                endif;
                ?>

                <div class="text-center paging" style="font-size: 18px; margin-bottom: 50px;">
                    <?= paginate_links() ?>
                </div>
            </div>

<?php get_footer() ?>