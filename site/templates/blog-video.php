<?php snippet('header', array('bodyclass' => 'blog-video blog-single')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><?php echo $page->title() ?></h1>
                <div class="meta">
                    <span><i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; 
                    <?php echo $page->date('j M Y') ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                    <?php foreach(explode(',',$page->tags()) as $t): ?><a href="<?php echo $page->parent()->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a> <?php endforeach ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 media">
                <?php echo $page->videourl()->oembed(); ?>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $page->text()->kirbytext() ?>
            </div>            
        </div>    
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>
