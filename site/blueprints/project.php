<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  align:
    label: Title alignment
    type: radio
      options:
        left: left
        right: right
  employer:
    label: Employer
    type:  radio
    options:
      reprovinci: Reprovinci
      artandflywork: Art &amp; Flywork
  tags:
    label: Tags
    type:  tags
  visual:
    label: Visual
    type:  selector
    mode:  single
    types:
      - image
  text:
    label: Text
    type:  textarea
  link:
    label: Link
    type:  text

  meta:
    label: Meta shizzle
    type: headline
  decotext:
    label: Decotext behind the main nav
  meta_description:
    label: Meta description (SEO/Google)
