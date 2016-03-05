<?php

$kirby = kirby();

if (isset(getenv('OPENSHIFT_DATA_DIR'))) {

	$openshiftDataDir = getenv('OPENSHIFT_DATA_DIR');
	
	// get the changing data from the Openshift datadir
	$kirby->roots->content  = $openshiftDataDir . DS . 'content';
	$kirby->roots->thumbs   = $openshiftDataDir . DS . 'thumbs';
	$kirby->roots->cache    = $openshiftDataDir . DS . 'cache';
	$kirby->roots->avatars  = $openshiftDataDir . DS . 'avatars';
	$kirby->roots->accounts = $openshiftDataDir . DS . 'accounts';
	$kirby->roots->cache    = $openshiftDataDir . DS . 'cache';

	// a custom openshift alias is added in .htaccess
	// so this site works in regular env as well as openshift
	$kirby->urls->content   = $kirby->urls()->index() . '/oscontent';
	$kirby->urls->thumbs    = $kirby->urls()->index() . '/osthumbs';
	$kirby->urls->avatars   = $kirby->urls()->index() . '/osavatars';
	
}