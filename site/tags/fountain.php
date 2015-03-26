<?php

kirbytext::$tags['fountain'] = array(
    'html' => function($tag) {
        echo "<!-- FOUNTAIN -->";
        return $tag->file($tag->attr('fountain'))->fountain();
        echo "<!-- FOUNTAIN END -->";
    }
);

?>