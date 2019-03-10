<?php

$sign=$_POST["sign"];
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$x1=$_POST["x1"];
$y1=$_POST["y1"];
$x2=$_POST["x2"];
$y2=$_POST["y2"];
$thesign = "".$sign."";



//point1
$xside1=($a*($x1*$x1)+$b*$x1+$c);
$xside2=($a*($x2*$x2)+$b*$x2+$c);
if ($x1!="" and $y1!="") {
if ($thesign=="le") {
	if ($y1<=$xside1) {
	echo "".$x1." , ".$y1." Is a solution to y<=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x1." , ".$y1." Is not a solution to y<=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($thesign=="l") {
	if ($y1<$xside1) {
	echo "".$x1." , ".$y1." Is a solution to y<".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x1." , ".$y1." Is not a solution to y<".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($thesign=="g") {
	if ($y1>$xside1) {
	echo "".$x1." , ".$y1." Is a solution to y>".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x1." , ".$y1." Is not a solution to y>".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($thesign=="ge") {
	if ($y1>=$xside1) {
	echo "".$x1." , ".$y1." Is a solution to y>=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x1." , ".$y1." Is not a solution to y>=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
}
}
?><?php


if ($x2!="" and $y2!="") {
if ($sign=="le") {
	if ($y2<=$xside2) {
	echo "".$x2." , ".$y2." Is a solution to y<=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x2." , ".$y2." Is not a solution to y<=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($sign=="l") {
	if ($y2<$xside2) {
	echo "".$x2." , ".$y2." Is a solution to y<".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x2." , ".$y2." Is not a solution to y<".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($sign=="g") {
	if ($y2>$xside2) {
	echo "".$x2." , ".$y2." Is a solution to y>".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x2." , ".$y2." Is not a solution to y>".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
} elseif ($sign=="ge") {
	if ($y2>=$xside2) {
	echo "".$x2." , ".$y2." Is a solution to y>=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	} else {
	echo "".$x2." , ".$y2." Is not a solution to y>=".$a."X^2+".$b."X+".$c."<BR><BR><BR>";
	}
}
}



?><BR><BR><?php
echo "Find other things about this very same quadratic equation:";
echo "<BR><bR>";
echo "<a href=\"vertex.php?a=".$a."&b=".$b."&c=".$c."\">Find the Vertex</a><BR>";
echo "<a href=\"solution_num.php?a=".$a."&b=".$b."&c=".$c."\">Find the Number of places that it intercepts the X axis</a><BR>";
echo "<a href=\"parabola.php?a=".$a."&b=".$b."&c=".$c."\">Find the places that it intercepts the X axis</a><BR>";
echo "<a href=\"descriminant.php?a=".$a."&b=".$b."&c=".$c."\">Find the Discriminant of the Quadratic Equation</a><BR>";
echo"";
?><BR><BR><a href="http://www.myip.jacware.com">MyIP</a>
