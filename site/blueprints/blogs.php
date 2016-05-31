<?php if(!defined('KIRBY')) exit ?>

title: Blog list

pages: true
  template:
    blog
files: true
fields:
  title:
    label: Title
  category_title:
    label: Category title
  text:
    label: Text
    type:  markdown

  meta:
    label: Meta shizzle
    type: headline
  decotext:
    label: Decotext behind the main nav
  meta_description:
    label: Meta description (SEO/Google)
