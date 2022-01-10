        </div>
    </div>


    <!-- Footer -->
      <!-- Site footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 style="color:#bf3939; font-weight:bold;">Tentang Website Ini</h6>
                        <p class="text-justify">Web ini milik HIMA MBTI dan dikelola oleh Divisi Creative Media & Information untuk memberitakan informasi terkait aktivitas kampus, baik aktivitas di dalam maupun di luar kampus. Berita diinformasikan dalam bentuk artikel dari tiap divisi terkait. </p>
                    </div>
  
                    <div class="col-lg-5 offset-lg-1">
                        <h6 style="color:#bf3939; font-weight: bold;">Kategori</h6>
                        <ul class="footer-links">
                            <li><a href="<?php echo home_url('') ?>/category/hrd">Human Research Development</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/cmi">Creative Media and Information</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/ird">Internal Research Development</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/pr">Public Relation</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/am">Academic Management</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/comdev">Community Development</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/sac">Sport, Art, and Culture</a></li>
                            <li><a href="<?php echo home_url('') ?>/category/entre">Entrepreneur</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-5 col-xs-12">
                        <p class="copyright-text">HIMA MBTI <?php echo date('Y') ?> - Made by <span style="color:#bf3939; font-weight: bolder;">CMI 2020 Team</span>.</p>
                    </div>
        
                    <div class="col-md-5 col-sm-7 col-xs-12">
                    <ul class="social-icons">
                        <li><a target="_blank" class="youtube" href="https://www.youtube.com/channel/UCZouZ7Exc0IqB8Y1GsztVtw"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" class="twitter" href="https://twitter.com/hima_mbti"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" class="line" href="https://lin.ee/dnmcHT0"><i class="fab fa-line"></i></a></li>
                        <li><a target="_blank" class="instagram" href="https://www.instagram.com/hima_mbti/"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" class="youtube" href="https://www.tiktok.com/@hima_mbti"><i class="fab fa-tiktok"></i></a></li>  
                        <li> <a data-toggle="popover" data-placement="top" title="Email" data-content="contact@himambti.com"><i class="fa fa-envelope"></i></a> </li>
                    </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
            });
        </script>

        <?php wp_footer() ?>
        
        <!-- Script -->
        <script src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/popper.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
        

    <script>
        var typed = new Typed('#typed', {
            // Waits 1000ms after typing "First"
            strings: ['Membara ^1000 Membiru ^1000 Menyatu'],
            typeSpeed: 30,
            startDelay: 2000,
            showCursor: true,
        });
    </script>

    <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
    </script>
</body>
</html>