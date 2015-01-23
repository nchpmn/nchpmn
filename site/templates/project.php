<?php snippet('header', array('bodyclass' => 'work-single')) ?>

<header id="cover" class="jumbotron cover">
    <div class="owl-carousel">
        <?php if($page->video()): ?>
            <div class="item">
                <?php echo vimeo($page->video()) ?>
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

<script>
// Find all YouTube videos
var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();
</script>


<?php snippet('prevnext') ?>



<?php snippet('footer') ?>