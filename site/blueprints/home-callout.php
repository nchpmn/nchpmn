<?php if(!defined('KIRBY')) exit ?>

title: Home/Callout
pages: false
fields:
  title:
    label: Title
    type:  text
  header:
    label: Header
    type: text
  button:
    label: Button Text
    type: text
  buttonURL:
    label: Button Link
    type: text
  photo:
    label: Background Photo
    type: select
    options: images
  navtitle:
    label: Navbar Settings
    type: headline
  navhome:
    text: Show link on home page
    type: checkbox
  navall:
    text: Show link on all pages
    type: checkbox
    width: 1/2
  navrel:
    text: Use relative link on subpages
    type: checkbox
    width: 1/2