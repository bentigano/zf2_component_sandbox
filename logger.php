<?php

require_once 'vendor/autoload.php';

require_once 'vendor/library/ChromePhp/ChromePhp.php';

use Zend\Log\Logger,
    Zend\Log\Writer\ChromePhp as Writer;
    
$logger = new Logger();
$logger->addWriter(new Writer());

$logger->log(Logger::ALERT, 'Yay!!! We are finally logging from PHP! ' . date('l jS \of F Y h:i:s A'));

?>