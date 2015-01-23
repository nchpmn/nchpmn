<!--span class="meta"><?php echo $post->date('j M Y') ?></span-->
<a id="blog-link-box" href="<?php echo $post->link() ?>">
    <h2><?php snippet('urltitle', array('url' => $post->link())) ?> &raquo;</h2>
    <p class="hidden-xs"><?php echo $post->link() ?></p>
    </a>
<p><?php echo $post->article()->excerpt(200) ?></p>
<p><a href="<?php echo $post->url() ?>">More &rarr;</a></p>