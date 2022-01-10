<?php get_header() ?>

    <!-- Bagian HIMA -->
    <div class="position-relative overflow-hidden p-3 text-center bg-light front">
        <div class="col-md-5 mx-auto my-5">
            <hr>
            <h2 class="font-weight-normal">HIMPUNAN MAHASISWA MANAJEMEN BISNIS TELEKOMUNIKASI & INFORMATIKA</h2>
            <p class="lead"><span id="typed"></span></p>
            <hr>
        </div>  
    </div>

    <!-- VISI & MISI -->
    <div class="container text-center front-widget" style="margin-bottom: 50px;">
        <h1 class="display-3"><span style="color:#1f2958">VISI</span><span>MISI</span></h1>
        <div class="row">
            <!-- Visi -->
            <div class="col-lg-8 offset-lg-2 box-visi">
                <?php 
                    if(is_active_sidebar('visi')) : 
                        dynamic_sidebar('visi');
                    endif;
                ?>
            </div>

            <!-- Misi -->
            <div class="col-lg-8 offset-lg-2 box-misi">
                <?php 
                    if(is_active_sidebar('misi')) : 
                        dynamic_sidebar('misi');
                    endif;
                ?>
            </div>
        </div>
    </div>


    <hr  style="margin: 50px;">

    <!-- Arga Dara -->
    <div class="container text-center argadara">
        <div class="row">
            <div class="col-lg-4 my-auto">
                <h2>Wajah MBTI</h2>
                <p>Wajah baru HIMA MBTI ini sendiri merupakan inovasi dari divisi Creative Media and Information yang bertujuan untuk lebih dekat dengan keluarga MBTI dan mempermudah dalam pembagian informasi. </p>
                <p>Bagian Creative Media and Information dan Academic Management bekerjasama untuk menghadirkan kedua saudara ini untuk membantu penyiaran informasi bagi HIMA MBTI. </p>
            </div>

            <div class="col-lg-4 col-6">
                <div class="card" style="height: auto">
                    <img class="card-img-top mx-auto" src="<?php bloginfo('template_url') ?>/img/arga.png" alt="Arga">
                    <div class="card-body">
                        <h4 class="card-title">Arga</h4>
                        <p class="card-text">Arga disini hadir untuk memberikan informasi seputar HIMA MBTI dan seluruh kegiatan non-Akademik demi menjadi wadah keluarga MBTI. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="card" style="height: auto">
                    <img class="card-img-bottom mx-auto" src="<?php bloginfo('template_url') ?>/img/dara.png" alt="Dara">
                    <div class="card-body">
                        <h4 class="card-title">Dara</h4>
                        <p class="card-text">Dara, hadir untuk menemani Arga dalam bidang Akademik, nih! Penyalur infomasi dari bagian sekretariat, LAA, dan lain-lain untuk keluarga MBTI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr  style="margin: 50px;">

    <!-- Info Terbaru -->
    <div class="container informasi">
        <h1 class="display-4 text-center font-weight-normal">Jangan Sampai Ketinggalan!</h1>
        <div class="row">
            <div class="col-lg-4">
                <h2 class="text-center">Post Terbaru</h2>
                <?php
                    $args = array(
                        'posts_per_page' =>2,
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
                            <h3>
                                <a href="<?php the_permalink(); ?>" class="judul-konten"><?php the_title(); ?></a>
                            </h3>
                            <p class="meta">
                                <?php the_time('F j, Y') ?>
                                oleh 
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>. 
                            </p>
                        </div>
                    </div>
                    <hr>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                    <!-- Search Form -->
                    <div class="text-center">
                        <p>Atau cari postingan di sini:</p>
                        <?php get_search_form() ?>
                    </div>
                    
            </div>
            
            <!-- Twitter -->
            <div class="col-lg-4">
                <div class="twitter">
                    <?php 
                        if(is_active_sidebar('twitter')) : 
                            dynamic_sidebar('twitter');
                        endif;
                    ?>
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-lg-4">
                <div class="instagram">
                    <?php 
                        if(is_active_sidebar('instagram')) : 
                            dynamic_sidebar('instagram');
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 50px"></div>
            

<?php get_footer() ?>