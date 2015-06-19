<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  link:
    label: Link
    type:  text
  employer:
    label: Employer
    type:  radio
    options:
      reprovinci: Reprovinci
      artandflywork: Art &amp; Flywork
  tags:
    label: Tags
    type:  tags
  text:
    label: Text
    type:  textarea