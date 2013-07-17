<?php

require 'vendor/library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array(
    //'namespaces' => array('Zend' => 'vendor/library/Zend'),
    'autoregister_zf' => true,
    )
);
$loader->register();