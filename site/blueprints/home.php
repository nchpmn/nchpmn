<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
  photo:
    label: Cover Photo
    type: select
    options: images