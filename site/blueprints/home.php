<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  template:
    blog
    default
    projects
fields:
  title:
    label: Title
  category_title:
    label: Category title
  intro:
  	label: Intro
  	type: markdown
  text:
    label: Text
    type:  markdown
  
  meta:
    label: Meta shizzle
    type: headline
  categorytitle:
    label: Category title
  decotext:
    label: Decotext behind the main nav
  meta_description:
    label: Meta description (SEO/Google)
