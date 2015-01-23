<?php snippet('header', array('bodyclass' => 'work-single')) ?>

<header id="cover" class="jumbotron cover">
    <div class="owl-carousel">
        <?php if($page->video()): ?>
            <div class="item">
                
            </div>
        <?php endif ?>
    </div>
    <?php $cover = $page->cover(); ?>
    <?php if($image = $page->image(strval($cover))): ?>
        style="background-image:url('<?php echo $image->url() ?>');"
    <?php endif ?>
</header><!-- End header -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-2 post-content">
                <div class="clearfix">
                    <h1><?php echo $page->title() ?></h1>
                    <span class="pull-left"><?php echo $page->role() ?></span>
                    <span class="pull-right"><?php echo $page->year('j Y') ?></span>
                </div>
                
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-md-3 col-xs-offset-5">
                <dl>
                    <dt>Production Company</dt>
                    <dd><?php echo $page->company() ?></dd>
                    <dt>Client</dt>
                    <dd><?php echo $page->client() ?></dd>
                    <?php foreach($page->crew()->yaml() as $person): ?>
                        <dt><?php echo $person['role'] ?></dt>
                        <dd><?php echo $person['name'] ?></dd>
                    <?php endforeach ?>
                </dl>
            </div>
        </div>
    </div>
</article>

<?php echo js(array(
        'assets/js/okvideo.min.js',
    )) ?>
<script>
$(function(){
    $.okvideo({ video:'<?php echo $page->video() ?>' })
});
</script>


<?php snippet('prevnext') ?>



<?php snippet('footer') ?>