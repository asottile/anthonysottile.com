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
$vertexy=($a*($vertexx*$vertexx)+$b*$vertexx+$c);
$vertexx = number_format($vertexx, 4);
$vertexy = number_format($vertexy, 4);

$x__2 = floor($vertexx-2);
$x__1 = floor($vertexx-1);
$x_1 = ceil($vertexx+1);
$x_2 = ceil($vertexx+2);


function getcorpoint($otherpoint) {
$newpoint=($a*($otherpoint*$otherpoint)+$b*$otherpoint+$c);
return $newpoint;
}

$y__2 = ($a*($x__2*$x__2)+$b*$x__2+$c);
$y__1 = ($a*($x__1*$x__1)+$b*$x__1+$c);
$y_2 = ($a*($x_2*$x_2)+$b*$x_2+$c);
$y_1 =($a*($x_1*$x_1)+$b*$x_1+$c);



?>
<table border="1">
<tr>
<td>X</td>
<td><?php echo $x__2; ?></td>
<td><?php echo $x__1; ?></td>
<td><?php echo $vertexx; ?></td>
<td><?php echo $x_1; ?></td>
<td><?php echo $x_2; ?></td>
</tr>
<tr>
<td>Y</td>
<td><?php echo $y__2; ?></td>
<td><?php echo $y__1; ?></td>
<td><?php echo $vertexy; ?></td>
<td><?php echo $y_1; ?></td>
<td><?php echo $y_2; ?></td>
</tr>
</table>



<?php
echo "Find other things about this very same quadratic equation:";
echo "<BR><bR>";
echo "<a href=\"solution_num.php?a=".$a."&b=".$b."&c=".$c."\">Find the Number of places that it intercepts the X axis</a><BR>";
echo "<a href=\"parabola.php?a=".$a."&b=".$b."&c=".$c."\">Find the places that it intercepts the X axis</a><BR>";
echo "<a href=\"descriminant.php?a=".$a."&b=".$b."&c=".$c."\">Find the Discriminant of the Quadratic Equation</a><BR>";
echo"";
?><BR><BR>
<a href="http://www.myip.jacware.com">MyIP</a><BR><BR>&copy; Ph3rny
