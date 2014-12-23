<?php snippet('header') ?>
<body class="blog-archive">
<?php snippet('navbar') ?>

<header id="cover" class="jumbotron cover">
        <div class="container text-center">
            <h1 class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">Blog</h1>
        </div>        
</header><!-- End header -->
    
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