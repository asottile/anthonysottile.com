<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
if ($a=="" and $b=="" and $c=="") {
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
}

$vertexx=(-1*($b/($a*2)));
$vertexy=($a*($vertexx*vertexx)+$b*$vertexx+$c);
$vertexx = number_format($vertexx, 4);
$vertexy = number_format($vertexy, 4);

echo "<table><tr><td>X</td><td> $vertexx </td></tr><tr><td>Y</td><td> $vertexy </td></tr></table>";
?><BR><BR><?php
echo "Find other things about this very same quadratic equation:";
echo "<BR><bR>";
echo "<a href=\"solution_num.php?a=".$a."&b=".$b."&c=".$c."\">Find the Number of places that it intercepts the X axis</a><BR>";
echo "<a href=\"parabola.php?a=".$a."&b=".$b."&c=".$c."\">Find the places that it intercepts the X axis</a><BR>";
echo "<a href=\"descriminant.php?a=".$a."&b=".$b."&c=".$c."\">Find the Discriminant of the Quadratic Equation</a><BR>";
echo"";
?><BR><BR>
<a href="http://www.myip.jacware.com">MyIP</a><BR><BR>&copy; Ph3rny
