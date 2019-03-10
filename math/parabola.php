<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
if ($a=="" and $b=="" and $c=="") {
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
}





$answertopleft = (-1 * $b);
$undersqrootleft = ($b * $b);
$undersqrootright = (4 * $a * $c);
$undersqroot = ($undersqrootleft - $undersqrootright);
$sqroot = sqrt($undersqroot);
$answer1top = ($answertopleft - $sqroot);
$answer2top = ($answertopleft + $sqroot);
$underdivsign = (2 * $a);
$answer1 = ($answer1top / $underdivsign);
$answer2 = ($answer2top / $underdivsign);
$answer1 = number_format($answer1,4);
$answer2 = number_format($answer2,4);



echo "Answer1: $answer1";
echo "<BR>Answer2: $answer2";
?><BR><BR><?php
echo "Find other things about this very same quadratic equation:";
echo "<BR><bR>";
echo "<a href=\"vertex.php?a=".$a."&b=".$b."&c=".$c."\">Find the Vertex</a><BR>";
echo "<a href=\"descriminant.php?a=".$a."&b=".$b."&c=".$c."\">Find the Discriminant of the quadratic equation</a><BR>";
echo "<a href=\"solution_num.php?a=".$a."&b=".$b."&c=".$c."\">Find the Number of solutions on the X axis</a><BR>";
echo"";
?>

<BR><BR>

<a href="http://www.myip.jacware.com">MyIP</a><BR><BR>&copy; Ph3rny
