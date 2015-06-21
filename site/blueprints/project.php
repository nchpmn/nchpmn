<?php if(!defined('KIRBY')) exit ?>

title: Work/Single
pages: false
files:
  sortable: true
fields:
  projectInfo:
    label: Project Information
    type: headline
  title:
    label: Project Title
    type:  text
  text:
    label: Text
    type: textarea
  role:
    label: Role
    type: text
  year:
    label: Year
    type:  date
    format: YYYY
  category:
    label: Category
    type: radio
    options:
      film: Film
      tvc: TVC
      sport: Sport
      other: Other
  tags:
    label: Tags
    type: tags
    index: siblings
  mediaInfo:
    label: Media
    type: headline
  coverSource:
    label: Cover Image Source
    type: checkbox
    text: Use the Video Thumbnail as Cover Image
  cover:
    label: Cover Image
    type: select
    options: images
  videoURL:
    label: Video URL (Vimeo and YouTube are supported)
    type: text
  projectImages:
    label: Project Images
    type: checkboxes
    options: images
  creditsInfo:
    label: Credits
    type: headline
  company:
    label: Production Company
    type: text
  client:
    label: Client
    type: text
  projectURL:
    label: Project URL
    type: url
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
