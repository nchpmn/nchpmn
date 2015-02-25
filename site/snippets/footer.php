    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-2 col-sm-offset-1">
                    <p class="text-right">CONTACT ME</p>
                </div>
                <div class="col-xs-7 col-sm-4">
                    <dl>
                        <dt>Email</dt>
                        <dd><a href="mailto:nathan@nchp.mn">nathan@nchp.mn</a></dd>
                        <dt>Location</dt>
                        <dd>Sydney &amp; Wollongong, Australia</dd>
                        <dt>Phone</dt>
                        <dd>+61 416 544 800</dd>
                    </dl>
                </div>
                <div class="col-xs-4 hidden-xs">
                    <p>SOCIALLY</p>
                    <a href="<?php echo $site->youtube() ?>"><i class="fa fa-youtube-square fa-3x"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="<?php echo $site->vimeo() ?>"><i class="fa fa-vimeo-square fa-3x"></i></a>
                </div>
				<div class="col-xs-5 visible-xs">
                    <p class="text-right">SOCIALLY</p>
                </div>
                <div class="col-xs-7 visible-xs">
                    <a href="<?php echo $site->youtube() ?>"><i class="fa fa-youtube-square fa-3x"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="<?php echo $site->vimeo() ?>"><i class="fa fa-vimeo-square fa-3x"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <div id="copyright">
        <div class="container">
            <p>Copyright Nathan Chapman &mdash; 2014</p>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo js(array(
        'assets/js/bootstrap.min.js',
        'assets/js/custom.js',
    )) ?>
    <script>
        // Smooth Anchor Scroll Linky Thing Script
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <?php if($page->isHomePage()): ?>
        <?php echo js(array(
            'assets/js/jquery.easing.1.3.js',
            'assets/js/jquery.colio.min.js',
            'assets/js/isotope.pkgd.min.js',
            'assets/js/owl.carousel.min.js'
        )) ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.portfolioContainer').colio({
                    id: 'colio_1',
                    placement: 'before', // would prefer this to be 'inside', but there were problems
                    scrollOffset: 150,
                    navigation: false,
                    closeText: '<span><i class="fa fa-times fa-lg"></i></span>',
                    contentFilter: '',
                });
            });
        </script>

        <!--script>
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
             
                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');
             
                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                     });
                     return false;
                }); 
            });
            
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                items:1,
            })
        </script-->
    <?php endif; ?>
    <?php if($page->isChildOf($pages->find('work'))): ?>
        <?php echo js(array(
            'assets/js/owl.carousel.min.js',
        )) ?>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,                
                nav:true,
                margin:0,
                center:true,
                video:true,
                responsive: {
                    0: {
                        items:1
                    },
                    1200: {
                        items:1.75
                    }
                }
            });
        </script>  
    <?php endif; ?>
</body>
</html>
    <!-- /footer -->