<?php snippet('header', array('bodyclass' => 'blog-link blog-single')) ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                <h1><a href="<?php echo $page->link() ?>"><?php echo $page->title() ?> &rarr;</a></h1>
                <div class="meta">
                    <span><i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; 
                    <?php foreach(explode(',',$page->tags()) as $t): ?><a href="<?php echo $page->parent()->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a> <?php endforeach ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                    <?php echo $page->date('j M Y') ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <blockquote>
                    <?php echo $page->quote() ?>
                </blockquote>
                <?php echo $page->text()->kirbytext() ?>
            </div>            
        </div>    
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>