<?php

preg_match("/<title>(.+)<\/title>/siU", file_get_contents($url), $matches);
echo $title = $matches[1];

?>