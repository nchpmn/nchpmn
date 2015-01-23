<span class="meta"><?php echo $post->date('j M Y') ?></span>
<h1><a href="<?php echo $post->url() ?>"><?php echo $post->title(); ?></a></h1>
<?php echo $post->leading()->kirbytext() ?>
<p><a href="<?php echo $post->url() ?>">More &rarr;</a></p>