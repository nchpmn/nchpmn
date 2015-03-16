<?php snippet('header', array('bodyclass' => 'blog-archive')) ?>
<h1 class="text-center"><a href="<?php echo $page->url() ?>"><span><?php echo $page->title() ?></span></a></h1>
<div class="container">
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
    <div class="row">
        <?php $posts = $page->children()->visible()->flip();
        if($tag = param('tag')) {
            $posts = $posts->filterBy('tags', param('tag'), ',');
        }
        $posts = $posts->paginate(5); ?>
        <?php $n = 0; foreach($posts as $post): $n++; ?>
            <article class="post <?php if($n>1): ?>col-xs-12 col-sm-6<?php else: ?>col-xs-12<?php endif ?>">
                <h2><a href="<?php echo $post->url() ?>"><?php echo $post->title() ?></a></h2>
                <?php if($n == 1): ?>
                            <?php if($post->intendedTemplate() == 'blog-article'): ?>
                    <?php echo kirbytext($post->excerpt()) ?>
                <?php else: ?>
                    <?php echo kirbytext($post->text()->excerpt(300)) ?>
                <?php endif ?>
                <?php endif ?>
                <div class="meta">
                    <?php if($post->intendedTemplate() == 'blog-article'): ?>
                        <i class="fa fa-pencil"></i>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $post->text())) ?>
                    <?php elseif($post->intendedTemplate() == 'blog-link'): ?>
                        <i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                    <?php else: ?>
                        <i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                    <?php endif ?>
                    <div class="tags pull-right">
                        <?php foreach(explode(',',$post->tags()) as $t): ?><a href="<?php echo $page->url() ?>/tag:<?php echo $t ?>"><span><?php echo "#".$t ?></span></a><?php endforeach ?>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
    </div>
    </div>
</div>

<?php snippet('pagination-prevnext', array('posts' => $posts)) ?>




<?php snippet('footer') ?>