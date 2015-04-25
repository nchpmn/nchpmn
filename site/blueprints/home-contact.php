<?php if(!defined('KIRBY')) exit ?>

title: Home/Contact
pages: false
fields:
  title:
    label: Title
    type:  text
  photo:
    label: Profile Photo
    type: select
    options: images
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