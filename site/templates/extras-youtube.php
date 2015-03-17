<!-- Designed for AJAX Loading -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="video-responsive item">
            <?php $id = explode("?v=", $page->link()) ?>
            <?php $id = $id[1] ?>
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $id ?>?showinfo=0&autohide=1&autoplay=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>