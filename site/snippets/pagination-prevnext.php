<?php if($posts->pagination()->hasPages()): ?>
<section class="prevnext">
    <div class="container">
        <hr />
        <div class="row">
            <?php if($posts->pagination()->hasNextPage()): ?>
                <a class="next col-xs-3 col-xs-offset-3" href="<?php echo $posts->pagination()->nextPageURL() ?>"><span class="hidden-xs">PREVIOUS</span><span class="visible-xs">PREV</span></a>
            <?php endif ?>
            <?php if($posts->pagination()->hasPrevPage()): ?>
                <a class="prev col-xs-3 <?php if($posts->pagination()->hasNextPage()): ?><?php else: ?>col-xs-offset-6<?php endif; ?>" href="<?php echo $posts->pagination()->prevPageURL() ?>">NEXT</a>
            <?php endif ?>
        </div>
    </div>
</section>
<?php endif ?>