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
  tags:
    label: Colio Tags
    type: tags
    index: children
  archive:
    label: Archive Settings
    type: headline
  numberitems:
    label: Number of Items to Show
    type: number
  onepager:
    label: One Pager
    type: headline
  number:
    label: Items to Show
    type: number
  navtitle:
    label: Navbar Settings
    type: headline
  navall:
    text: Show link on all pages
    type: checkbox
    width: 1/2
  navrel:
    text: Use relative link on subpages
    type: checkbox
    width: 1/2