<?php snippet('header', array('bodyclass' => 'blog-article')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h1><?php echo $page->title() ?></h1>
                <div class="meta col-xs-10 col-xs-offset-1">
                    <span><?php echo $page->date('j M Y') ?> &mdash; <?php snippet('readingtimeshort', array('text' => $page->text())) ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="leading">
                    <?php echo $page->excerpt()->kirbytext() ?>
                </div>
                <?php echo $page->text()->kirbytext() ?>
            </div>            
        </div>    
    </div>
</article>
<?php snippet('footer') ?>