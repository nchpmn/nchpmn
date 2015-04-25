<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-asterisk"></i>
            </button>
            <a class="navbar-brand" href="<?php echo $site->url() ?>">NCHP<span class="orange"><strong>.</strong></span>MN</a>
        </div>
        
        <div class="collapse navbar-collapse clearfix" id="collapse">
            <?php if($page->isHomePage()): ?>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#cover">Home</a></li>
                    <?php $items = $pages->visible() ?>
                    <?php foreach($items as $item): ?>
                        <?php if($item->navall()->bool()): ?>
                            <?php echo $item->title() ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
                
            <?php else: ?>
                <ul class="nav navbar-nav pull-right">
                    <?php $items = $pages->visible();
                    if($items->count()): ?>
                        <?php foreach($items as $item): ?>
                            <li><a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <li><a href="<?php echo kirby()->urls()->index() ?>#contact">Contact</a></li>
                </ul>
            <?php endif; ?>            
        </div>
    </div>
</nav><!-- End navbar -->