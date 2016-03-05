<?php

$kirby = kirby();

if ($openshiftDataDir = getenv('OPENSHIFT_DATA_DIR')) {
	$kirby->roots->content  = $openshiftDataDir . DS . 'content';
	$kirby->roots->thumbs   = $openshiftDataDir . DS . 'thumbs';
	$kirby->roots->cache    = $openshiftDataDir . DS . 'cache';
	$kirby->roots->avatars  = $openshiftDataDir . DS . 'avatars';
	$kirby->roots->accounts = $openshiftDataDir . DS . 'accounts';
	$kirby->roots->cache    = $openshiftDataDir . DS . 'cache';
}