<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
if ($a=="" and $b=="" and $c=="") {
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
}


$num = (($b*$b) - 4*$a*$c);

if ($num>0) {
echo "That Equation has 2 solutions";
} elseif ($num =="0") {
echo "That Equation has 1 solution";
} elseif ($num<0) {
echo "That Equation has 0 solutions";
}

?><BR><BR><?php
echo "Find other things about this very same quadratic equation:";
echo "<BR><bR>";
echo "<a href=\"vertex.php?a=".$a."&b=".$b."&c=".$c."\">Find the Vertex</a><BR>";
echo "<a href=\"parabola.php?a=".$a."&b=".$b."&c=".$c."\">Find the places that it intercepts the X axis</a><BR>";
echo "<a href=\"descriminant.php?a=".$a."&b=".$b."&c=".$c."\">Find the Discriminant of the Quadratic Equation</a><BR>";
echo"";
?><BR><BR>

<a href="http://www.myip.jacware.com">MyIP</a><BR><BR>&copy; Ph3rny
