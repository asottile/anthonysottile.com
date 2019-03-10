<?php
$unit =$_POST["unit"];
$base=$_POST["base"];
$length=$_POST["length"];
$percent=$_POST["percent"];

$percent1=($percent/100)+1;
echo '<img src="exponentialimage.php?base='.$base.'&length='.$length.'&percent='.$percent.'"></img><BR><BR><BR>';
for ($i=0; $i<=$length;$i++) {
echo "After $i ".$unit."s:<BR>";
$num2 = pow($percent1,$i) ;
$y = $base*$num2;
echo "Your Amount is $y <BR><BR><BR>";

}
?>
