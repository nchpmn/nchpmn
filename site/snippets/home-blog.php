<section id="blog">
    <h3 class="text-center"><a href="blog"><span><?php echo $data->title() ?></span></a></h3>
    <div class="container">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <?php $items = page('blog')->children()->visible()->flip()->limit(strval($data->number())) ?>
                <?php $first = $items->first() ?>
                <?php $second = $items->nth(1) // Second overall item - index starts at 0 ?>
                
                <?php foreach($items as $item): ?>
                    <div class="post
                        <?php if($item == $first): ?>
                            col-sm-7 first
                        <?php elseif($item == $second): ?>
                            col-sm-5 second
                        <?php else: ?>
                            col-xs-12 col-sm-4
                        <?php endif ?>
                    ">
                        
                        <h4><a href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></h4>
                        
                        <?php if($item == $first or $item == $second): ?>
                            <?php if($item->intendedTemplate() == 'blog-article'): ?>
                                <?php echo $item->excerpt() ?>
                            <?php else: ?>
                                <?php if($item == $first):
                                    $length = 300;
                                else:
                                    $length = 200;
                                endif ?>
                                <?php echo $item->text()->excerpt($length) ?>
                            <?php endif ?>
                        <?php endif ?>
                        
                        <div class="meta">
                            <?php if($item->intendedTemplate() == 'blog-article'): ?>
                                <i class="fa fa-pencil"></i>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $item->text())) ?>
                            <?php elseif($item->intendedTemplate() == 'blog-link'): ?>
                                <i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?>
                            <?php else: ?>
                                <i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $item->date('j M Y') ?>
                            <?php endif ?>
                            
                            <?php if($item == $first or $item == $second): ?>
                                <div class="tags pull-right">
                                    <?php foreach(explode(',',$item->tags()) as $t): ?><a href="<?php echo $item->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a><?php endforeach ?>
                                </div>
                            <?php endif ?>
                            
                        </div>
                    </div>
                    <?php if($item == $second): ?>
                    </div>
                    <div class="row">
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section><!-- End blog -->