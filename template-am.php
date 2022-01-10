<?php
/*
    Template Name: Template Academic Management
*/
?>

<?php get_header();?>
    <!-- Jumbotron -->
    <div class="jumbotron dara">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 ">
                    <img class="mx-auto d-block" src="<?php bloginfo('template_url') ?>/img/Dara-Web.png" alt="">
                </div>

                <div class="col-lg-9">
                    <h1 class="display-3">Halo, Saudara!</h1>
                    <p>Selamat datang di Academic Management HIMA MBTI. Di sini, Dara akan selalu membantu kalian seputar informasi akademis di kampus.</p>
                    <p><a class="btn btn-lg" target="_blank" href="https://lin.ee/x43XDq5" role="button"><i class="fab fa-line"></i> Tanya Dara &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Blog -->
    <div class="container blog">
        <div class="row">
            <!-- Konten -->
            <div class="col-lg-8" style="border-right: 1px solid rgba(0,0,0,0.1)">
                <?php
                    $args = array(
                        'category_name' => 'am',
                        'posts_per_page' =>2,
                        'paged' => get_query_var('paged'),
                    );
                    $query = new WP_Query($args);
                ?>
                <?php if($query->have_posts()) : ?>
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                <!-- Thumbnail Konten -->
                <div class="row">
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
                endif;
                ?>

                <div class="text-center paging" style="font-size: 18px; margin-bottom: 50px;">
                    <?php 
                        $halaman = array(
                            'total' => $query->max_num_pages
                        );
                    ?>
                    <?= paginate_links($halaman) ?>
                </div>
            </div>

            <!-- Info Lainnya -->
            <div class="col-lg-4 text-center my-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Info Beasiswa</h2>
                        <p class="text-center">Coming Soon</p>
                    </div>

                    <div class="col-lg-12">
                        <h2>Info Lowongan Kerja</h2>
                        <p class="text-center">Coming Soon</p>
                    </div>
                </div>
            </div>
            

<?php get_footer() ?>