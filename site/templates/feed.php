<?php

echo site()->grandchildren()->visible()->flip()->limit(15)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'blog',
));

?>