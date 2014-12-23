<?php if(!defined('KIRBY')) exit ?>

title: Link
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
  link:
    label: Link
    type: url
  article:
    label: Content
    type: textarea