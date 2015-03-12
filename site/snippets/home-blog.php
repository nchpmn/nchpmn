<section id="blog">
    <h3 class="text-center"><a href="blog"><span><?php echo $data->title() ?></span></a></h3>
    <div class="container">
        <div class="row">
            <?php $items = page('blog')->children()->visible()->flip()->limit(strval($data->number())) ?>
            <?php $first = $items->first() ?>
            
            <?php foreach($items as $item): ?>
                    <div class="post
                        <?php if($item == $first): ?>
                            col-sm-6 first
                        <?php else: ?>
                            col-xs-6 col-sm-3
                        <?php endif ?>
                    ">
                        <a href="<?php echo $item->url() ?>">
                            <h4><?php echo $item->title() ?></h4>
                        
                            <span>
                                <?php if($item->intendedTemplate() == 'blog-article'): ?>
                                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $item->text())) ?>
                                <?php elseif($item->intendedTemplate() == 'blog-link'): ?>
                                    <i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?>
                                <?php else: ?>
                                    <i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?>
                                <?php endif ?>
                            </span>
                            
                            
                        </a>
                    </div>
            <?php endforeach ?>
        </div>
    </div>
</section><!-- End blog -->