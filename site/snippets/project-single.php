<?php snippet('header', array('bodyclass' => 'work-single')) ?>


<article>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 media">
                <!-- Media and Credits -->
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
            <div class="col-xs-12 col-sm-6 col-md-5">
                <!-- Article -->
                <div class="clearfix">
                    <h1><?php echo $page->title() ?></h1>
                    <span class="pull-left"><?php echo $page->role() ?></span>
                    <span class="pull-right"><?php echo $page->date('Y', 'year')?></span>
                </div>
                
                <?php echo kirbytext($page->text()) ?>
                
                <div class="crew">
                    <dl>
                        <div class="col-xs-6 col-sm-4 col-lg-3">
                            <dt><?php echo $page->company() ?></dt>
                            <dd></dd>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-3">
                            <dt></dt>
                            <dd></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</article>

<?php snippet('prevnext') ?>


<?php snippet('footer') ?>