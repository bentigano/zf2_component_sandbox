<?php

require_once 'vendor/library/Zend/Loader/AutoloaderFactory.php';
Zend\Loader\AutoloaderFactory::factory(array(
    'Zend\Loader\StandardAutoloader' => array(
        'autoregister_zf' => true,
        //'namespaces' => array('Zend' => 'vendor/library/Zend'),
    )
));