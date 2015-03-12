<?php snippet('header', array('bodyclass' => 'blog-article blog-single')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><?php echo $page->title() ?></h1>
                <div class="meta">
                    <span><i class="fa fa-pencil"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $page->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $page->text())) ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
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