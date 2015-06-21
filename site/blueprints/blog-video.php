<?php if(!defined('KIRBY')) exit ?>

title: Blog/Video
pages: false
files:
  sortable: false
fields:
  title:
    label: Title (YouTube and Vimeo are Supported)
    type: text
  date:
    label: Date
    type: date
    format: DD/MM/YYYY
  videourl:
    label: Video URL
    type: text
  text:
    label: Text
    type: textarea
  tags:
    label: Tags
    type: tags
    index: siblings
