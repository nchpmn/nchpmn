<?php snippet('header', array('bodyclass' => 'home')) ?>

<header id="cover" class="jumbotron cover" style="background-image:url(
        <?php $photo = $page->photo(); ?>
        <?php if($image = $page->image(strval($photo))): ?>
            <?php echo $image->url() ?>
        <?php endif ?>
        )">
    <div class="container text-center">
        <h1 class="col-sm-10 col-sm-offset-1"><?php echo $page->name() ?></h1>
        <h2><?php echo $page->tagline() ?></h2>
    </div>
    <div class="container container-btn text-center">
        <a href="#welcome" class="btn btn-lg btn-default"><span class="fa fa-chevron-down"></span></a>
    </div>    
</header><!-- End header -->

<?php foreach($pages->visible() as $section) {
    snippet('home-'.$section->uid(), array('data' => $section));
} ?>



<!-- Start Footer -->
<!-- Emi -->
<?php snippet('footer') ?>