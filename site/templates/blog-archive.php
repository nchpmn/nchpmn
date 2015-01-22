<?php snippet('header', array('bodyclass' => 'blog-archive')) ?>

<header id="cover" class="jumbotron cover">
        <div class="container text-center">
            <h1 class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">Blog</h1>
        </div>        
</header><!-- End header -->


<?php $n = 0; foreach(page('blog')->children()->visible()->limit(5) as $post): $n++; ?>
    <?php snippet('single-'.$post->template(), array('post' => $post, 'n' => $n)) ?>    
<?php endforeach ?>


<?php snippet('footer') ?>



<?php $n = 0; foreach($page->children() as $child): $n++; ?>
  <li class="<?php echo ($n%2) ? 'odd' : 'even' ?>">
    ...
  </li>
  <?php endforeach ?>