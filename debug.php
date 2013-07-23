<h1>Zend\Debug</h1>
<p><a href="https://zf2.readthedocs.org/en/release-2.2.0/modules/zend.debug.html" target="_blank">View more info on Zend\Debug</a></p>

<?php
require_once 'vendor/autoload.php';
use Zend\Debug\Debug;

Debug::dump('my test string');

Debug::dump(TRUE, 'my boolean value: '); // passing in a label of "my boolean value: "

$debugData = Debug::dump(17, 'not echoed', false); // passing in a label and instructing NOT to echo
echo $debugData;
echo '<br>';

include 'showcode.php';