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

                    <?php if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $item->videoURL(), $output_array)): ?>
                    <!-- Vimeo Video URL -->
                        <?php $videoID = $output_array[5] ?>
                        <?php
                            $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".$videoID.".php"));
                            $img = $hash[0]['thumbnail_large'] ?>
                        <img src="<?php echo $img ?>" class="img-responsive" />
                    <?php elseif(preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $item->videoURL(), $output_array)): ?>
                    <!-- YouTube Video URL -->
                        <?php $videoID = $output_array[1] ?>
                        <img src="<?php echo 'http://i1.ytimg.com/vi/'.$videoID.'/maxresdefault.jpg' ?>" class="img-responsive" />
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
