<?php snippet('header', array('bodyclass' => 'blog-archive')) ?>

<header id="cover" class="jumbotron cover">
        <div class="container text-center">
            <h1 class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">Blog</h1>
        </div>        
</header><!-- End header -->


<?php foreach(page('blog')->children()->visible()->limit(5) as $post): ?>
    <?php snippet('single-'.$post->template(), array('post' => $post)) ?>    
<?php endforeach ?>


<?php snippet('footer') ?>