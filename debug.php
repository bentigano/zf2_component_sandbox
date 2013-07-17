<?php

echo '<h1>Zend\Debug</h1>';

require_once 'vendor/autoload.php';

use Zend\Debug\Debug;

Debug::dump('my test string');

Debug::dump(TRUE, 'my boolean value: '); // passing in a label of "my boolean value: "

$debugData = Debug::dump(17, 'not echoed', false); // passing in a label and instructing NOT to echo
echo $debugData;

echo '<br>';

include 'showcode.php';