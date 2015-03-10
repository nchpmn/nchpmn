<?php snippet('header', array('bodyclass' => 'blog-archive')) ?>

<header id="cover" class="jumbotron cover">
        <div class="container text-center">
            <h1 class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">Blog</h1>
        </div>        
</header><!-- End header -->

<div class="container">
<?php $posts = $page->children()->visible()->flip()->paginate(2) ?>
<?php $n = 0; foreach($posts as $post): $n++; ?>
<?php $alignclass = ($n%2) ? 'first-post' : 'second-post' ?>
<?php if($alignclass == 'first-post'): ?>

    <article class="first-post">
        <div class="image-container col-xs-3 col-sm-4 col-md-5"
        <?php $cover = $post->cover(); ?>
        <?php if($image = $post->image(strval($cover))): ?>
            style="background-image:url('<?php echo $image->url() ?>');"
        <?php endif ?>></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-4 col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6 post-excerpt">
                    <?php snippet('archive-'.$post->template(), array('post' => $post)) ?>
                </div>
            </div>
        </div>
    </article>

<?php else: ?>

    <article class="second-post">
        <div class="image-container col-xs-3 col-xs-offset-9 col-sm-4 col-sm-offset-8 col-md-5 col-md-offset-7"
        <?php $cover = $post->cover(); ?>
        <?php if($image = $post->image(strval($cover))): ?>
            style="background-image:url('<?php echo $image->url() ?>');"
        <?php endif ?>></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-7 col-md-6 col-lg-6 post-excerpt">
                    <?php snippet('archive-'.$post->template(), array('post' => $post)) ?>
                </div>
            </div>
        </div>  
    </article>

<?php endif ?>                    
<?php endforeach ?>
</div>

<?php snippet('pagination-prevnext', array('posts' => $posts)) ?>




<?php snippet('footer') ?>