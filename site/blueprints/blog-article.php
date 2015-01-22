<?php if(!defined('KIRBY')) exit ?>

title: Article
fields:
  title:
    label: Title
    type: text
  date:
    label: Date
    type: date
    format: YYYY-MM-DD
  cover:
    label: Cover Image
    type: text
    validate: filename
    placeholder: cover.jpg
  leading:
    label: Excerpt
    type: textarea
  article:
    label: Content
    type: textarea