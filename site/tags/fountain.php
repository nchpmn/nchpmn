<?php

kirbytext::$tags['fountain'] = array(
  'html' => function($tag) {
    $script = $tag->file($tag->attr('fountain'))->read();
    return js('assets/js/fountain/fountain.js');
      }
);

?>