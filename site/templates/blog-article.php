<?php snippet('header', array('bodyclass' => 'blog-article blog-single')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><?php echo $page->title() ?></h1>
                <div class="meta">
                    <span><i class="fa fa-pencil"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                    <?php echo $page->date('j M Y') ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; 
                    <?php snippet('readingtimeshort', array('text' => $page->text())) ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                    <?php foreach(explode(',',$page->tags()) as $t): ?><a href="<?php echo $page->parent()->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a><?php endforeach ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <div class="leading">
                    <?php echo $page->excerpt()->kirbytext() ?>
                </div>
                <?php echo $page->text()->kirbytext() ?>
            </div>            
        </div>    
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>