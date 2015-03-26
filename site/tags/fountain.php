<?php

kirbytext::$tags['fountain'] = array(
  'html' => function($tag) {
    return $tag->file($tag->attr('fountain'))->read();
  }
);
?>