<?php snippet('header') ?>
<body class="blog-single">
<?php snippet('navbar') ?>

<header id="cover" class="jumbotron cover">
    <div class="container text-center">
        <h1 class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-10 col-lg-offset-1">This is the post title!</h1>            
        <span class="meta col-xs-12 ">14 Dec 2013 &mdash; 3 min</span>
    </div>        
</header><!-- End header -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 post-content">
            
            </div>
        </div>
    </div>
</article>



<?php snippet('footer') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- script src="js/bootstrap.min.js"></script -->
    <script src="js/custom.js"></script>
    <script>        
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
</body>
</html>