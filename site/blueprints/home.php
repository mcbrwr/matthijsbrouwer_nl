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
  
  categorytitle:
    label: Category title
  meta:
    label: Meta shizzle
    type: headline
  decotext:
    label: Decotext behind the main nav
  meta_description:
    label: Meta description (SEO/Google)
