<?php if(!defined('KIRBY')) exit ?>

title: Blog/Video
pages: false
files:
  sortable: false
fields:
  title:
    label: Title
    type: text
  date:
    label: Date
    type: date
    format: DD/MM/YYYY
  source:
    label: Video Source
    type: radio
    options:
      youtube: YouTube
      vimeo: Vimeo
  videoid:
    label: Video ID
    type: text
  text:
    label: Text
    type: textarea
  tags:
    label: Tags
    type: tags
    index: siblings