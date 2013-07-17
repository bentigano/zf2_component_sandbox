<?php

echo '<hr>';
$f=htmlentities(file_get_contents($_SERVER['SCRIPT_FILENAME']));
echo "<h3>" . $_SERVER['SCRIPT_FILENAME'] . "</h3>";
echo "<form><textarea class='span12' rows=20>";
echo $f;
echo "</textarea></form>";
echo "&nbsp;<p>";
echo "&nbsp;<p>";