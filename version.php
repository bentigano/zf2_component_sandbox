<h1>Zend\Version</h1>
<p><a href="https://zf2.readthedocs.org/en/latest/modules/zend.version.html" target="_blank">View more info on Zend\Version</a></p>

<?php
require_once 'vendor/autoload.php';
use Zend\Version\Version;
?>

<strong>Latest Version:</strong> <?php echo Version::getLatest(); ?> (Uses ZF api, optionally use GitHub)
<br>
<strong>This Version:</strong> <?php echo Version::VERSION; ?>
<br>
<strong>Latest:</strong> <?php if (Version::isLatest()) { echo 'Yes'; } else { echo 'No'; } ?>
<br>
<strong>Compared with 3.2.1:</strong> <?php echo Version::compareVersion('3.2.1'); ?> (1 = 3.2.1 is newer, 0 = same, -1 = older)
<br>

<?php 
include 'showcode.php';