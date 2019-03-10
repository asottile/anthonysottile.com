<?php
$a1=$_POST["a1"];
$b1=$_POST["b1"];
$c1=$_POST["c1"];
$a2=$_POST["a2"];
$b2=$_POST["b2"];
$c2=$_POST["c2"];

$multby = (-1*$a1)/$a2;
$a2 = $a2*$multby;
$b2 = $b2*$multby;
$c2 = $c2*$multby;

$b_end = $b1+$b2;
$c_end = $c1+$c2;
if ($c_end =="0" and $b_end == "0") {
echo "The solutions are all points on the line of ".$a1."X + ".$b1."Y = ";
echo $c1;
} elseif ($c_end!="0" and $b_end =="0" and $c_end!=$b_end) {
echo "There are no solutions";
} else {
$y = $c_end/$b_end;
$x = ($c1 - ($y*$b1))/$a1;
echo "<table><tr><td>X</td><td>".$x."</td></tr><tr><td>Y</td><td>".$y."</td></tr></table>";
}

?>
