<?php snippet('header', array('bodyclass' => 'blog-single blog-link')) ?>

<header id="cover" class="jumbotron cover" 
    <?php $cover = $page->cover(); ?>
    <?php if($image = $page->image(strval($cover))): ?>
        style="background-image:url('<?php echo $image->url() ?>');"
    <?php endif ?>
>
    <div class="container text-center">
        <h1 class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-10 col-lg-offset-1"><?php echo $page->title() ?></h1>
        <span class="meta col-xs-12 "><?php echo $page->date('j M Y') ?> &mdash; <?php snippet('readingtimeshort', array('text' => $page->article())) ?></span>
    </div>        
</header><!-- End header -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 post-content">
                <a id="blog-link-box" href="<?php echo $page->link() ?>">
                    <h2><?php snippet('urltitle', array('url' => $page->link())) ?> &raquo;</h2>
                    <p class="hidden-xs"><?php echo $page->link() ?></p>
                </a>
                <?php echo $page->article()->kirbytext() ?>
            </div>
        </div>
    </div>
</article>

<script type="text/javascript">

</script>

<?php snippet('prevnext') ?>



<?php snippet('footer') ?>