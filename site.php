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

    // the openshift content dir is available through a soft link
    // wich is created at deployment by the script .openshift/action_hooks/deploy
    // this is so the regular content dir is still usable in dev environment
    $kirby->urls->content   = $kirby->urls()->index() . '/oscontent';
    $kirby->urls->thumbs    = $kirby->urls()->index() . '/osthumbs';
    $kirby->urls->avatars   = $kirby->urls()->index() . '/osavatars';
    
}