<?php

echo '<h1>Zend\Version</h1>';

require_once 'vendor/autoload.php';

use Zend\Version\Version;
echo '<strong>Latest Version:</strong> ' . Version::getLatest() . ' (Uses ZF api, optionally use GitHub)';
echo '<br>';
echo '<strong>This Version:</strong> ' . Version::VERSION;
echo '<br>';
echo '<strong>Latest:</strong> '; if (Version::isLatest()) { echo 'Yes'; } else { echo 'No'; }
echo '<br>';
echo '<strong>Compared with 3.2.1:</strong> ' . Version::compareVersion('3.2.1') . ' (1 = 3.2.1 is newer, 0 = same, -1 = older)';
echo '<br>';

include 'showcode.php';