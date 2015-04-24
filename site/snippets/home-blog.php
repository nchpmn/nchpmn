<section id="blog">
    <h3 class="text-center"><a href="<?php echo $data->url() ?>"><span><?php echo $data->title() ?></span></a></h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <?php 
                $posts = $data->children()->visible()->flip()->limit(strval($data->number()));
                $first = $posts->first();
                $second = $posts->nth(1) // Second overall item - index starts at 0
                ?>
                <div class="row">
                <?php foreach($posts as $post): ?>
                    
                    <div class="post
                        <?php if($post == $first): ?>
                            col-sm-7 first
                        <?php elseif($post == $second): ?>
                            col-sm-5 second
                        <?php else: ?>
                            col-xs-12 col-sm-4
                        <?php endif ?>
                    ">
                        <h4><a href="<?php echo $post->url() ?>"><?php echo $post->title() ?></a></h4>
                        <div class="excerpt">
                            <?php if($post == $first or $post == $second): ?>
                                <?php if($post->intendedTemplate() == 'blog-article'): ?>
                                    <?php echo $post->excerpt()->kirbytext() ?>
                                <?php else: ?>
                                    <?php if($post == $first):
                                        $length = 300;
                                    else:
                                        $length = 200;
                                    endif ?>
                                    <?php echo kirbytext($post->text()->excerpt($length)) ?>
                                <?php endif ?>
                            <?php endif ?>
                       </div><!-- /excerpt -->
                        
                        <div class="meta">
                            <?php if($post->intendedTemplate() == 'blog-article'): ?>
                                <i class="fa fa-pencil"></i>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $post->text())) ?>
                            <?php elseif($post->intendedTemplate() == 'blog-link'): ?>
                                <i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                            <?php else: ?>
                                <i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                            <?php endif ?>
                            
                            <?php if($post == $first or $post == $second): ?>
                                <div class="tags pull-right">
                                    <?php foreach(explode(',',$post->tags()) as $t): ?><a href="<?php echo $data->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a><?php endforeach ?>
                                </div>
                            <?php endif ?>
                            
                        </div><!-- /meta -->
                        
                    </div><!-- /post -->
                    <?php if($post == $second): ?>
                    </div><!-- /row -->
                    <div class="row">
                    <?php endif ?>
                <?php endforeach ?>
                </div><!-- /row -->
            </div>
        </div>
    </div>
</section><!-- /blog -->