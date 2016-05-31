<?php if(!defined('KIRBY')) exit ?>

title: blog
pages: false
files: true
fields:
  visual:
    label: Visual
    type:  selector
    mode:  single
    types:
      - image
  title:
    label: Title
  subtitle:
    label: Subtitle
  date:
    width: 1/2
    label: Date
    type: date
    default: today
  tags:
    width: 1/2
    label: Tags
    type: tags
    index: template
  intro:
    label: Intro
    type: textarea
  text:
    label: Text
    type: markdown
    header1: h2
    header2: h3
    header3: h4
    header4: h5
    header5: h6

  meta:
    label: Meta shizzle
    type: headline
  decotext:
    label: Decotext behind the main nav
  meta_description:
    label: Meta description (SEO/Google)
