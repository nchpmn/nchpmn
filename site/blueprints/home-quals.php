<?php if(!defined('KIRBY')) exit ?>

title: Home/Quals
pages: true
fields:
  title:
    label: Title
    type:  text
  shorttitle:
    label: Short Title
    type: text
  mainquals:
    label: Major Qualifications
    type: structure
    entry: >
      {{award}}<br />
      {{major}}<br />
      {{id}}
    fields:
      award:
        label: Award Name
        type: text
      major:
        label: Major/Specification
        type: text
      id:
        label: Award ID
        type: text
  minorquals:
    label: Minor Qualifications
    type: structure
    entry: >
      {{award}}<br />
      {{id}}
    fields:
      award:
        label: Award Name
        type: text
      id:
        label: Award ID
        type: text
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