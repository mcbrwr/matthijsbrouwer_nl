<?php

return function($site, $pages, $page) {

	if ($page->hasImages()) {
		$visualUrl = $page->images()->first()->thumb('width:1414|height:1000|crop:true|quality:65')->url();
		$visualAlt = $page->images()->first()->alt();
	} else {
		$visualUrl = '';
		$visualAlt = '';
	}

	return compact('visualUrl', 'visualAlt');

};