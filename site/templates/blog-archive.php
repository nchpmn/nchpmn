<?php snippet('header', array('bodyclass' => 'blog-archive')) ?>

<div class="container">
    <h1 class="text-center"><span><?php echo $page->title() ?></span></h1>
    <?php $posts = $page->children()->visible()->flip()->paginate(4) ?>
    <?php $first = $posts->first() ?>
    <?php $second = $posts->nth(1) // Second overall item - index starts at 0 ?>
    <?php foreach($posts as $post): ?>
        <article class="post first">
            <h2><?php echo $post->title() ?></h2>
            <div class="meta">
                <?php if($post->intendedTemplate() == 'blog-article'): ?>
                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php snippet('readingtimeshort', array('text' => $post->text())) ?>
                <?php elseif($post->intendedTemplate() == 'blog-link'): ?>
                    <i class="fa fa-link"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                <?php else: ?>
                    <i class="fa fa-play"></i> &nbsp;&nbsp;&mdash;&nbsp;&nbsp; <?php echo $post->date('j M Y') ?>
                <?php endif ?>
                
            </div>
        </article>
    <?php endforeach ?>
</div>

<?php snippet('pagination-prevnext', array('posts' => $posts)) ?>




<?php snippet('footer') ?>