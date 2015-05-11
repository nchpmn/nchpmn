<section id="work">
    <div class="container">
        <div class="row">
            <h3 class="text-center"><a href="work"><span><?php echo $data->title() ?></span></a></h3>
        </div>
        <div class="row portfolioContainer">
        <?php $count = 0 ?>
        <?php foreach(page('work')->children()->visible()->flip()->limit(strval($data->number())) as $item): ?>
            <div class="col-xs-6 col-lg-4 item" data-content="<?php echo $item->url() ?>">
                <a class="colio-link" href="#">
                    <div class="description text-center">
                        <h4><?php echo $item->title() ?></h4>
                        <span><?php echo $item->role() ?></span>
                    </div>
                    <?php if($item->coverSource() == '1'): ?>
                        <?php if($item->videoSource() == 'youtube'): ?>
                            <img src="<?php echo 'http://i1.ytimg.com/vi/'.$item->videoID().'/maxresdefault.jpg' ?>" class="img-responsive" />
                        <?php else: ?>
                            <?php
                            $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$item->videoID().".php"));
                            $img = $hash[0]['thumbnail_large'] ?>
                            <img src="<?php echo $img ?>" class="img-responsive" />                                
                        <?php endif ?>
                    <?php else: ?>
                        <?php if($item->cover() == ''): ?>
                            <?php echo thumb(page('work')->file(strval(page('work')->defaultimage())), array('width' => 500, 'height' => 282, 'crop' => true, 'class' => 'img-responsive')); ?>
                        <?php else: ?>
                            <?php echo thumb($item->file(strval($item->cover())), array('width' => 500, 'height' => 282, 'crop' => true, 'class' => 'img-responsive')); ?>
                        <?php endif ?>
                    <?php endif ?>
                </a>
            </div>
            <?php if(++$count % 3 == 0): ?>
                <div class="clearfix visible-lg"></div>
            <?php endif ?>
            <?php if($count % 2 == 0): ?>
                <div class="clearfix hidden-lg"></div>
            <?php endif ?>
        <?php endforeach ?>
        </div>

    </div>
</section><!-- End work -->