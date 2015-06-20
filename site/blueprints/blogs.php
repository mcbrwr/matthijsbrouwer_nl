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
  text:
    label: Text
    type:  markdown