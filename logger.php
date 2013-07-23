<?php

require_once 'vendor/autoload.php';
require_once 'vendor/library/ChromePhp/ChromePhp.php';

use Zend\Log\Logger,
    Zend\Log\Writer\ChromePhp as Writer;
    
$logger = new Logger();
$logger->addWriter(new Writer());

// ChromePHP logging needs to happen before any output (logs are sent with headers)
$logger->log(Logger::ALERT, 'Yay!!! We are finally logging from PHP! ' . date('l jS \of F Y h:i:s A'));

?>

<h1>Zend\Log</h1>

<p>Enable ChromePhp and look in your Console window to see the ChromePHP logged message.</p>
<br>

<?php
include 'showcode.php';