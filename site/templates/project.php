<?php snippet('header', array('bodyclass' => 'work-single')) ?>

<header id="cover" class="jumbotron cover owl-carousel">
    <div class="item video-responsive">
        <iframe src="//player.vimeo.com/video/114730775" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <?php foreach($page->files() as $image): ?>
        <div class="item">
            <img class="img-responsive" src="<?php echo $image->url() ?>">
        </div>
    <?php endforeach ?>  

</header>

<?php snippet('vimeothumb', array('id' => 118367247)) ?>

<!--
jQuery(document).ready(function() {
    jQuery("input#vimsub").click(function() {
        var vimeoVideoIDraw = jQuery("input#vimeoid").val();
        var vimeoVideoID = jQuery.trim(vimeoVideoIDraw);
        jQuery.getJSON('http://vimeo.com/api/v2/video/' + vimeoVideoID + '.json?callback=?', {
            format: "json"
        }, function(data, status) {
            var title = data[0].title;
            var videourl = data[0].url;
            var thisuser = data[0].user_name;
            var userurl = data[0].user_url;
            var largeThumb = data[0].thumbnail_large;
            jQuery("p.large a").attr('href', largeThumb).text(largeThumb);
            jQuery(".largethumb").attr('src', largeThumb);
            jQuery("a.video").attr('href', videourl).text(title);
            jQuery("a.user").attr('href', userurl).text(thisuser);
            jQuery("#result").addClass("visible");
            var raw = largeThumb.split('_');
            var urlsnip = raw[0];
            var hdThumb = urlsnip + '_1280.jpg';
            jQuery("p.hd a").attr('href', hdThumb).text(hdThumb);
            jQuery(".hdthumb").attr('src', hdThumb);
            jQuery(".hdthumb").error(function() {
                jQuery(".hdthumb").hide();
                jQuery("p.hd a").hide();
                jQuery("p.hd").addClass("nohd").text("There is no HD-Thumnail for this Video.");
            });
            jQuery("footer").addClass("visible");
        });
    });
});
if (!elementSupportsAttribute('input', 'autofocus')) {
    document.getElementById('vimeoid').focus();
}


-->

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




<?php snippet('prevnext') ?>



<?php snippet('footer') ?>