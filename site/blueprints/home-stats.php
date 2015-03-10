<?php if(!defined('KIRBY')) exit ?>

title: Home/Stats
pages: false
fields:
  title:
    label: Title
    type:  text
  photo:
    label: Background Photo
    type: select
    options: images
  stats:
    label: Stats
    type: structure
    entry: >
      {{amount}}<br />
      {{caption}}
    fields:
      amount:
        label: Amount
        type: text
      caption:
        label: Caption
        type: text