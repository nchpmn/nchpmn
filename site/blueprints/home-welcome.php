<?php if(!defined('KIRBY')) exit ?>

title: Home/Welcome
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
    label: Profile Photo
    type: select
    options: images