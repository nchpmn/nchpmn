<div class="row">
    <div class="col-md-7 col-lg-8 media" style="display:block">
        <?php echo $page->videoURL()->oembed() ?>
    </div>
    <article class="col-md-5 col-lg-4">
        <div class="clearfix">
            <h1><a href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a></h1>
            <span class="pull-left"><?php echo $page->role() ?></span>
            <span class="pull-right"><?php echo $page->date('Y', 'year')?></span>
        </div>
        
        <?php echo kirbytext($page->text()->excerpt(300)) ?>
        
        <a class="btn btn-primary pull-right" href="<?php echo $page->url() ?>">Read More &raquo;</a>
    </article>
</div>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-35296825-3', 'auto');
    ga('send', 'pageview');
</script>
