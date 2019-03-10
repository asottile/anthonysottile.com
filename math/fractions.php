<?
$numerator = $_GET['num'];
$denominator = $_GET['denom'];

if($numerator<0 and $denominator<0) {
$numerator = abs($numerator);
$denominator = abs($denominator);
}


if($numerator % $denominator != 0) {

for($i=2;$i<=$numerator;$i++) {
if($numerator % $i == 0) {
$numfactor[]=$i;
}
}

for($i=2;$i<=$denominator;$i++) {
if($denominator % $i == 0) {
$denomfactor[]=$i;
}
}

$gcf = 1;

if(is_array($numfactor) or is_array($denomfactor)) {

$commonfactors = array_intersect($numfactor, $denomfactor);

foreach($commonfactors as $factor) {
if ($factor>$gcf) {
$gcf = $factor;
}
}

}

$answer = ($numerator/$gcf)." / ".($denominator/$gcf);

} else {
$answer = ($numerator/$denominator);
}

echo $answer;
?>
