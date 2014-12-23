<section class="prevnext">
    <div class="container">
        <hr />
        <div class="row">
            
            <?php if($page->hasNextVisible()): ?>
                <a class="next col-xs-3 col-xs-offset-3" href="<?php echo $page->nextVisible()->url() ?>">NEXT</a>
            <?php endif ?>
            <?php if($page->hasPrevVisible()): ?>
                <a class="prev col-xs-3 <?php if($page->hasNextVisible()): ?><?php else: ?>col-xs-offset-6<?php endif; ?>" href="<?php echo $page->prevVisible()->url() ?>">PREVIOUS</a>
            <?php endif ?>
        </div>
    </div>
</section>