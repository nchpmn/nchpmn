<?php if(!defined('KIRBY')) exit ?>

title: Blog/Link
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
  link:
    label: Link URL
    type: url
  quote:
    label: Link Quotation
    type: textarea
  text:
    label: Text
    type: textarea
  tags:
    label: Tags
    type: tags
    index: siblings