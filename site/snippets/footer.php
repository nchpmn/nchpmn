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
                    <a href="<?php echo url('feed') ?>"><i class="fa fa-rss-square fa-3x"></i></a>
                </div>
				<div class="col-xs-5 visible-xs">
                    <p class="text-right">SOCIALLY</p>
                </div>
                <div class="col-xs-7 visible-xs">
                    <a href="<?php echo $site->youtube() ?>"><i class="fa fa-youtube-square fa-3x"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="<?php echo $site->vimeo() ?>"><i class="fa fa-vimeo-square fa-3x"></i></a>
                    <a href="<?php echo url('feed') ?>"><i class="fa fa-rss-square fa-3x"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <div id="copyright">
        <div class="container">
            <p>Copyright Nathan Chapman &mdash; 2015</p>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo js(array(
        'assets/js/bootstrap.min.js',
    ), $async = true) ?>
    <script type="text/javascript">
    $(document).ready(function(){       
       var scroll_start = 0;
       var startchange = $('#welcome');
       var offset = startchange.offset();
       $(document).scroll(function() { 
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
              $('nav').css('background-color', 'rgba(255,255,255,0.75)');
           } else {
              $('nav').css('background-color', 'rgba(255,255,255,0)');
           }
       });
    });
    </script>
    
    <?php if($page->isHomePage() or $page == 'extras/youtube'): ?>
        <?php echo js(array(
            'assets/js/jquery.colio.min.js',
            'assets/js/jquery.isotope.min.js',
        ), $async = true) ?>
        <script type="text/javascript">
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
            
        // COLIO + ISOTOPE
            $(document).ready(function(){
                $('.portfolioContainer').colio({
                    id: 'colio_1',
                    placement: 'before', // would prefer this to be 'inside', but there were problems
                    scrollOffset: 150,
                    navigation: false,
                    closeText: '<span><i class="fa fa-times fa-lg"></i></span>',
                    contentFilter: '',
                });
            
                // "isotope" plugin  
                var filter = '*', isotope_run = function(f) {  
                    $('.portfolioContainer').  
                    isotope({layoutMode : 'fitRows', filter: f}).  
                    trigger('colio','excludeHidden');  
                };  
                  
                $('#filters a').click(function(){  
                    $(this).addClass('filter-active').siblings().removeClass('filter-active');  
                    // take class name from href attr and then run isotope to filter items in portfolio  
                    var href = $(this).attr('href').substr(1);  
                    filter = href ? '.' + href : '*';  
                    isotope_run(filter);  
                    return false;  
                });  
                  
                // run isotope with "*" filter to show all items  
                isotope_run(filter);  
                  
            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-35296825-3', {'siteSpeedSampleRate': 100});
            ga('send', 'pageview');
        </script>
    <?php endif; ?>
    
</body>
</html>
    <!-- /footer -->