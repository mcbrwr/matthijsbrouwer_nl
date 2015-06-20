<?php if(!defined('KIRBY')) exit ?>

title: Blogs

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
  text:
    label: Text
    type:  markdown