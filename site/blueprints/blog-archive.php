<?php if(!defined('KIRBY')) exit ?>

title: Home/Blog
pages: true
fields:
  title:
    label: Title
    type: text
  text:
    label: Leading Paragraph
    type: textarea
  home:
    label: One Pager Settings
    type: headline
  number:
    label: Items to Show
    type: number
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