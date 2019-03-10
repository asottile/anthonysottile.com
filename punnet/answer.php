<style>
TD,TABLE {
border:1px solid #000;
}
</style>
<?
$father = $_POST['father'];
$mother = $_POST['mother'];


function isupper($i) { return (strtoupper($i) === $i);}

 function is_odd($num){
     return (is_numeric($num)&($num&1));
 }


function zeropad($num, $lim){
   return (strlen($num) >= $lim) ? $num : zeropad("0" . $num, $lim);
}

if(is_odd(strlen($father)) or $father=="") {
die('invalid father genotype<BR><a href="index.html">Back</a>');
}

if(is_odd(strlen($mother)) or $mother=="") {
die('invalid mother genotype<BR><a href="index.html">Back</a>');
}

if(strlen($mother)!=strlen($father)) {
die('mother and father genotypes are not compatible<BR><a href="index.html">Back</a>');
}

for($i=0;$i<=((strlen($father))/2)-1;$i++) {
$genotype['father'][$i]=$father{$i*2}.$father{($i*2)+1};
$genotype['mother'][$i]=$mother{$i*2}.$mother{($i*2)+1};
}

$length = count($genotype['father']);

for ($i=1;$i<=$length;$i++) {
$binnum.="1";
}
$decbinnum=bindec($binnum);

for ($i=0;$i<=$decbinnum;$i++) {
$comparenum = decbin($i);
$comparenum = zeropad($comparenum,strlen($binnum));
for($j=0;$j<=strlen($comparenum)-1;$j++) {
$fathertop[$i].=$genotype['father'][$j]{($comparenum{$j}*1)};
$mothertop[$i].=$genotype['mother'][$j]{($comparenum{$j}*1)};
}
}

for($i=2;$i<=count($fathertop)+1;$i++) {
$cell[1][$i]="<b>".$fathertop[$i-2]."</b>";
$cell[$i][1]="<b>".$mothertop[$i-2]."</b>";
}

for($i=2;$i<=count($fathertop)+1;$i++) {
	for($j=2;$j<=count($fathertop)+1;$j++) {
		for($k=1;$k<=strlen($binnum);$k++) {
			if(isupper($fathertop[$i-2]{$k-1})) {
				$cell[$i][$j].=$fathertop[$i-2]{$k-1}.$mothertop[$j-2]{$k-1};
				$genotypestuff[$i][$j].=$fathertop[$i-2]{$k-1}.$mothertop[$j-2]{$k-1};
			} else {
				$cell[$i][$j].=$mothertop[$j-2]{$k-1}.$fathertop[$i-2]{$k-1};
				$genotypestuff[$i][$j].=$mothertop[$j-2]{$k-1}.$fathertop[$i-2]{$k-1};
			}
		}
	}
}



$rowcols = count($fathertop)+1;

echo "<table>";
echo "<tr><td rowspan=\"".($rowcols+1)."\" style=\"width:1px\">Mother's Genotype: ".$mother."</td><td colspan=\"".$rowcols."\">Father's Genotype: ".$father."</td></tr>";
for($i=1;$i<=$rowcols;$i++) {
echo "<tr>";
for ($j=1;$j<=$rowcols;$j++) {
echo "<td>&nbsp;";
echo $cell[$i][$j];
echo "</td>";
}
echo "</tr>";
}
echo "</table>";

foreach($genotypestuff as $a) {
foreach($a as $value) {
$genotypes[$value]=$genotypes[$value]+1;

for($i=0;$i<=strlen($binnum)-1;$i++) {
$tempphenotype .= $value{$i*2};
}

$phenotype[$tempphenotype]++;
$tempphenotype="";
}
}

echo "<h3>Genotypes Ratio</h3>";
echo "Note: These May Need To Be Reduced";
echo "<table><tr><td><b>Genotype</b></td><td><b>Number</b></td></tr>";
foreach($genotypes as $genotype=>$number) {
echo "<tr>";
echo "<td>";
echo $genotype;
echo "</td>";
echo "<td>";
echo $number;
echo "</td>";
echo "</tr>";
}
echo "</table>";
echo "<BR>";
echo "<h3>Phenotypes Ratio</h3>";
echo "Note: These May Need To Be Reduced";
echo "<table><tr><td><b>Phenotype</b></td><td><b>Number</b></td></tr>";
foreach($phenotype as $phenotype=>$number) {
echo "<tr>";
echo "<td>";
echo $phenotype;
echo "</td>";
echo "<td>";
echo $number;
echo "</td>";
echo "</tr>";
}
echo "</table>";

?>
