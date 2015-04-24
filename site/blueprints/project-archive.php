<?php if(!defined('KIRBY')) exit ?>

title: Work/Archive
pages: true
files: true
fields:
  global:
    label: Global Settings
    type: headline
  title:
    label: Title
    type:  text
  defaultimage:
    label: Default Thumbnail
    type: select
    options: images
  archive:
    label: Archive Settings
    type: headline
  numberitems:
    label: Number of Items to Show
    type: number
  onepager:
    label: One Pager
    type: headline
    tags:
  label: Tags
    type: tags
    index: all
  number:
    label: Items to Show
    type: number