<?php

function pageExcerpt($page, $length=150, $fields=false) {
	if (empty($fields) or !is_array($fields)) {
		$fields = array('decotext','category_title','title','subtitle','intro','text');
	}

	$excerpt = '';
	foreach ($fields as $field) {
		$excerpt .= $page->$field() . ' ';
	}

	return substr($excerpt,0,$length);
	
}