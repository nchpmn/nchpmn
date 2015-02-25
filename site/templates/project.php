<div class="row">
    <div class="col-sm-7" style="display:block">
        <?php if($page->videoSource() == "youtube"): ?>
        <!-- YOUTUBE -->
        <div class="video-responsive item">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $page->videoID(); ?>?showinfo=0&autohide=1&autoplay=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php elseif($page->videoSource() == "vimeo"): ?>
        <!-- VIMEO -->
        <div class="video-responsive item">
            <iframe src="http://player.vimeo.com/video/<?php echo $page->videoID(); ?>?portrait=0&title=0&badge=0&byline=0&color=ed8046" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>    
    <?php endif; ?>
    
    <?php foreach($page->projectImages()->split() as $image): ?>
        <div class="item">
            <img class="img-responsive" src="<?php echo $page->files()->get($image)->url() ?>">
        </div>
    <?php endforeach ?>
    </div>
    <div class="col-sm-5">
        <h1><?php echo $page->title() ?></h1>
        <span class="pull-left"><?php echo $page->role() ?></span>
        <span class="pull-right"><?php echo $page->date('Y', 'year')?></span>
        
        <?php echo $page->text()->kirbytext() ?>
    </div>
</div>