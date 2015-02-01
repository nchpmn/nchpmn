<?php

$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
$med = $hash[0]['thumbnail_medium']; 
$thumb = explode('_', $med);
echo $thumb[0]; ?>_1280.jpg