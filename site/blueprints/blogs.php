<?php if(!defined('KIRBY')) exit ?>

title: Blog list

pages: true
  template:
    blog
files: true
fields:
  title:
    label: Title
    type:  text
  category_title:
    label: Category title
    type: text
  text:
    label: Text
    type:  markdown