<h1>Zend\Session</h1>
<p><a href="https://zf2.readthedocs.org/en/release-2.2.0/modules/zend.session.config.html" target="_blank">View more info on Zend\Session</a></p>

<?php
require_once 'vendor/autoload.php';

use Zend\Session\Container;

$container = new Container('my_session_namespace');
if (!isset($container->my_count))
{
	$container->my_count = 0;
}
$container->my_count = $container->my_count + 1;

$newContainer = new Container('my_other_session_namespace');
$newContainer->my_count = 'ACDEFG';
?>

<h4>The same variable name can be used in different namespaces...</h4>
<p>Each time I run this script (refresh), the first my_count variable will be incremented...</p>
<strong>my_count (stored in my_session_namespace):</strong> <?php echo $container->my_count; ?>
<br>
<strong>my_count (stored in my_other_session_namespace):</strong> <?php echo $newContainer->my_count; ?>
<?php
echo '<br>';

include 'showcode.php';