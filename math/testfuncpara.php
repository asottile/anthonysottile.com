<?php

function quadratic($a,$b,$c) {
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
print $answer1;
echo "<BR><BR>";
print $answer2;
}

?>
