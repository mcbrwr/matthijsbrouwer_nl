<?php

$kirby = kirby();

if (isset($_ENV['OPENSHIFT_DATA_DIR'])) {

    $openshiftDataDir = getenv('OPENSHIFT_DATA_DIR');
    
    // get the changing data from the Openshift datadir
    $kirby->roots->content  = $openshiftDataDir . DS . 'content';
    $kirby->roots->thumbs   = $openshiftDataDir . DS . 'thumbs';
    $kirby->roots->cache    = $openshiftDataDir . DS . 'cache';
    $kirby->roots->avatars  = $openshiftDataDir . DS . 'avatars';
    $kirby->roots->accounts = $openshiftDataDir . DS . 'accounts';
    $kirby->roots->cache    = $openshiftDataDir . DS . 'cache';

    if (file_exists($openshiftDataDir . DS . '/license.php')) {
        include($openshiftDataDir . DS . '/license.php');
    }

} else {
    if (file_exists($kirby->roots->config() . DS . 'license.php')) {
        include($kirby->roots->config() . DS . 'license.php');
    }
}