<?
$sixth=$_POST['sixth'];
$fifth=$_POST['fifth'];
$fourth=$_POST['fourth'];
$third=$_POST['third'];
$second=$_POST['second'];
$first=$_POST['first'];
$constant=$_POST['constant'];

function factornumber($number)
{
   for ($i=1; $i<=($number/2); $i++)
   {
       if ($number % $i == 0)
       {
           $factors[]=$i;
           $factors[]=-1*$i;
           $factors[]=$number/$i;
           $factors[]=-1*($number/$i);
       }
   }

$factors[]=1;
$factors[]=-1;
$factors[]=$number;
$factors[]=-1*$number;
$factors = array_unique($factors);
return $factors;
}


if($sixth!="0") {
//sixth degree
$a=$sixth;
$b=$fifth;
$c=$fourth;
$d=$third;
$e=$second;
$f=$first;
$g=$constant;

$fac_deg=factornumber(abs($a));
$fac_con=factornumber(abs($g));

foreach($fac_deg as $value1) {
	foreach($fac_con as $value2) {
		$possiblezeros[] = $value2/$value1;
	}
}

$possiblezeros = array_unique($possiblezeros);

foreach($possiblezeros as $asdf2=>$value) {
	$asdf = $value*$a;
	$asdf = $b+$asdf;
	$asdf = $value*$asdf;
	$asdf = $c+$asdf;
	$asdf = $value*$asdf;
	$asdf = $d+$asdf;
	$asdf = $value*$asdf;
	$asdf = $e+$asdf;
	$asdf = $value*$asdf;
	$asdf = $f+$asdf;
	$asdf = $value*$asdf;
	$asdf = $g+$asdf;

	if ($asdf==0) {
		$zeros[]=$value;
	}

}

} elseif ($fifth!="0") {
$a=$fifth;
$b=$fourth;
$c=$third;
$d=$second;
$e=$first;
$f=$constant;

$fac_deg=factornumber(abs($a));
$fac_con=factornumber(abs($f));

foreach($fac_deg as $value1) {
foreach($fac_con as $value2) {
$possiblezeros[] = $value2/$value1;

}
}
$possiblezeros = array_unique($possiblezeros);

foreach($possiblezeros as $asdf2=>$value) {

$asdf = $value*$a;
$asdf = $b+$asdf;
$asdf = $value*$asdf;
$asdf = $c+$asdf;
$asdf = $value*$asdf;
$asdf = $d+$asdf;
$asdf = $value*$asdf;
$asdf = $e+$asdf;
$asdf = $value*$asdf;
$asdf = $f+$asdf;

if ($asdf==0) {
$zeros[]=$value;
}

}


} elseif($fourth!="0") {
$a=$fourth;
$b=$third;
$c=$second;
$d=$first;
$e=$constant;

$fac_deg=factornumber(abs($a));
$fac_con=factornumber(abs($e));

foreach($fac_deg as $value1) {
foreach($fac_con as $value2) {
$possiblezeros[] = $value2/$value1;

}
}
$possiblezeros = array_unique($possiblezeros);

foreach($possiblezeros as $asdf2=>$value) {
$asdf = $value*$a;
$asdf = $b+$asdf;
$asdf = $value*$asdf;
$asdf = $c+$asdf;
$asdf = $value*$asdf;
$asdf = $d+$asdf;
$asdf = $value*$asdf;
$asdf = $e+$asdf;

if ($asdf==0) {
$zeros[]=$value;
}

}


} elseif($third!="0") {
$a=$third;
$b=$second;
$c=$first;
$d=$constant;

$fac_deg=factornumber(abs($a));
$fac_con=factornumber(abs($d));
foreach($fac_deg as $value1) {
foreach($fac_con as $value2) {
$possiblezeros[] = $value2/$value1;

}
}
$possiblezeros = array_unique($possiblezeros);


foreach($possiblezeros as $asdf2=>$value) {
$asdf = $value*$a;
$asdf = $b+$asdf;
$asdf = $value*$asdf;
$asdf = $c+$asdf;
$asdf = $value*$asdf;
$asdf = $d+$asdf;

if ($asdf==0) {
$zeros[]=$value;
}

}


} elseif($second!="0") {
echo "Hey lazyass go factor it yourself!";
} else {
echo "You are obviously too stupid to use the tool the right way";
}
if(is_array($zeros)) {

$zeros = array_unique($zeros);
echo "X = ";
foreach($zeros as $zero) {
echo $zero.", ";
}

} else {
echo "No rational Zeros Found";
}


?>
