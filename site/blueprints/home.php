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
    type:  text
  headertext:
  	label: Headertext
  	type: textarea
  	size: small
  text:
    label: Text
    type:  textarea
    size:  large