<?php
$m = $_POST["m"];
$b = $_POST["b"];

$yint = $b;
$xint = ((-1*$b)/$m);


echo "<table border=1><tr><td>X</td><td>".$xint."</td></tr><tr><td>Y</td><td>".$yint."</td></tr></table>";

?>

<BR><BR><a href="http://www.myip.jacware.com">MyIP</a>
