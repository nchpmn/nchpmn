<?php snippet('header', array('bodyclass' => 'work-archive')) ?>
<h1 class="text-center"><a href="<?php echo $page->url() ?>"><span><?php echo $page->title() ?></span></a></h1>
    <div class="container">
    <div class="portfolioContainer">
        <?php $posts = $page->children()->visible()->flip();
        $posts = $posts->paginate(strval($page->numberitems())); ?>
        <?php foreach($posts as $item): ?>
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <a class="colio-link" href="<?php echo $item->url() ?>">
                    <div class="work-description text-center">
                        <h4><?php echo $item->title() ?></h4>
                        <span><?php echo $item->role() ?></span>
                    </div>
                    <?php if($item->coverSource() == '1'): ?>
                        <?php if($item->videoSource() == 'vimeo'): ?>
                            <?php
                            $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$item->videoID().".php"));
                            $img = $hash[0]['thumbnail_large'] ?>
                        <?php endif ?>
                        <?php if($item->videoSource() == 'youtube'): ?>
                            <?php $img = "http://img.youtube.com/vi/".$item->videoID()."/mqdefault.jpg"; ?>
                        <?php endif ?>
                        <img src="<?php echo $img ?>" class="img-responsive" /> 
                    <?php else: ?>
                        <?php if($item->cover() == ''): ?>
                            <?php echo thumb($page->file(strval($page->defaultimage())), array('width' => 500, 'height' => 282, 'crop' => true, 'blur' => false, 'grayscale' => false, 'class' => 'img-responsive')); ?>
                        <?php else: ?>
                            <?php echo thumb($item->file(strval($item->cover())), array('width' => 500, 'height' => 282, 'crop' => true, 'blur' => true, 'grayscale' => false, 'class' => 'img-responsive')); ?>
                        <?php endif ?>
                    <?php endif ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
        
        <?php snippet('pagination-prevnext', array('posts' => $posts)) ?>
    </div>
<?php snippet('footer') ?>