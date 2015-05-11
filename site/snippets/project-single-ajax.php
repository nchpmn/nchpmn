<div class="row">
    <div class="col-sm-6 col-md-7 media" style="display:block">
    <?php $cover = $page->cover(); ?>
    <?php if($page->videoSource() == "youtube"): ?>
        <!-- YOUTUBE -->        
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $page->videoID(); ?>?showinfo=0&autohide=1&autoplay=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php elseif($page->videoSource() == "vimeo"): ?>
        <!-- VIMEO -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/<?php echo $page->videoID(); ?>?portrait=0&title=0&badge=0&byline=0&color=ed8046" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
    <?php elseif($image = $page->image(strval($cover))): ?>
        <a href="<?php echo $page->url() ?>"><img class="img-responsive" src="<?php echo $image->url() ?>"></a>
    <?php endif ?>
    
    </div>
    <article class="col-sm-6 col-md-5">
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