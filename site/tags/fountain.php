<?php

kirbytext::$tags['fountain'] = array(
    'html' => function($tag) {
        $text = $tag->file($tag->attr('fountain'))->read();
        $script = fountain($text,'<blockquote>','</blockquote>');
        return $script;
    }
);

?>