<?php if(!defined('KIRBY')) exit ?>

title: Blog/Article
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
  excerpt:
    label: Leading Paragraph
    type: textarea
  text:
    label: Main Article Text
    type: textarea
  tags:
    label: Tags
    type: tags
    index: siblings