<?php

function pageExcerpt($page, $length=150, $fields=false) {
	if (empty($fields) or !is_array($fields)) {
		$fields = array('title','subtitle','intro','text');
	}

	$excerpt = '';
	foreach ($fields as $field) {
		$excerpt .= $page->$field() . ' ';
	}

	return substr($excerpt,0,$length);
	
}