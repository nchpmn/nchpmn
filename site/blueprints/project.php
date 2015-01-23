<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Project Title
    type:  text
  year:
    label: Year
    type:  date
    format: YYYY  
  role:
    label: Role
    type: text
  video:
    label: Video
    type: url
  cover:
    label: Cover Image
    type: text
  text:
    label: Text
    type: textarea
  company:
    label: Production Company
    type: text
  client:
    label: Client
    type: text
  crew:
    label: Crew
    type: structure
    entry: >
      {{role}}<br />
      {{name}}
    fields:
      role:
        label: Role
        type: text
      name:
        label: Name
        type: text