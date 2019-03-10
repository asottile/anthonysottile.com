<?php
//header
header("Content-type: image/png");
$base=$_GET["base"];
$length=$_GET["length"];
$percent=$_GET["percent"];
$im = imagecreate(800,700);


// set colors
$white = imagecolorallocate($im, 255,255,255 );
$black = imagecolorallocate($im, 0,0,0 );
$red = imagecolorallocate($im, 255,00,00 );
$green = imagecolorallocate($im, 00,204,00 );
$blue = imagecolorallocate($im, 00,00,255 );


if ($percent <0) {
$max =$base;
$maxnum=$max/10;
$max=$max+$maxnum;
for ($i=0; $i<=($max+600); $i+=300) {
if (($max>$i) and ($max<($i+300))) {
$newnum=($i+300);
break;
}}
//$max = round($max, '-'.strlen($max).'' );


$interval = ($newnum/30);
$numberpixel = $interval/20;
} else {

$percent12 = (1+($percent/100));
$num2 = pow($percent12 , ($length)) ;
$max =($base*$num2);
$maxnum=$max/10;
$max=$max+$maxnum;
for ($i=0; $i<=($max+600); $i+=300) {
if (($max>$i) and ($max<($i+300))) {
$newnum=($i+300);
break;
}}
//$max = round($max, '-'.strlen($max).'' );

$interval =($newnum/30);
$numberpixel = $interval/20;
}

//$im = imagecreatefrompng("background_pictures/smallimg18.png");

// set the font
$font = "luxisb.ttf";





//set borders
imageline($im, 0, ImagesY($im)-1, ImagesX($im)-1, ImagesY($im)-1, $black);
imageline($im, ImagesX($im)-1, ImagesY($im)-1, ImagesX($im)-1, 0, $black);
imageline($im, ImagesX($im)-1, 0, 0, 0, $black);
imageline($im, 0, 0, 0, ImageSX($im)-1, $black);

imageline($im, 1, ImagesY($im)-2, ImagesX($im)-2, ImagesY($im)-2, $black);
imageline($im, ImagesX($im)-2, ImagesY($im)-2, ImagesX($im)-2, 1, $black);
imageline($im, ImagesX($im)-2, 1, 1, 1, $black);
imageline($im, 1, 1, 1, ImageSX($im)-2, $black);

imageline($im, 2, ImagesY($im)-3, ImagesX($im)-3, ImagesY($im)-3, $black);
imageline($im, ImagesX($im)-3, ImagesY($im)-3, ImagesX($im)-3, 2, $black);
imageline($im, ImagesX($im)-3, 2, 2, 2, $black);
imageline($im, 2, 2, 2, ImageSX($im)-3, $black);



//imagettftext($im, 8, 0, 150, 165, $black, $font, 'max: '.$max.'');
//imagettftext($im, 8, 0, 134, 123, $black, $font, 'int: '.$interval.'');
//imagettftext($im, 8, 0, 400, 430, $black, $font, 'pixelval: '.$numberpixel.'');




//set x line
imageline($im, 50, ImagesY($im)-50, ImagesX($im)-50, ImagesY($im)-50, $black);
imageline($im, 49, ImagesY($im)-49, ImagesX($im)-49, ImagesY($im)-49, $black);


//set y line
imageline($im, 50, 50, 50, Imagesy($im)-50, $black);
imageline($im, 49, 49, 49, Imagesy($im)-50, $black);

//set y numbers + lines
$ytest=0;
//write views
for ($pix=Imagesy($im)-50; $pix>50; $pix-=20){
imagettftext($im, 8, 0, 5, $pix+5, $black, $font, $ytest);
imageline($im, 5, $pix, Imagesx($im)-50, $pix, $black);
$ytest+=$interval;
}

//set x numbers + lines
$xtest=0;
//write views
for ($pix=50; $pix<=Imagesx($im)-50; $pix+=20){
imagettftext($im, 8, 0, $pix-3, Imagesy($im)-35, $black, $font, $xtest);
imageline($im, $pix, Imagesy($im)-50, $pix, 50, $black);
$xtest+=1;
}

//draw original perdiction
for ($i=-1; $i<=$length-1; $i++){
$percent12 = (1+($percent/100));
$num2 = pow($percent12 , ($i+1)) ;
$perme[$i]=($base*$num2);
}

$i=0;
while ( $i<35 and $perme[$i] !="" ){
//imagettftext($im, 8, 0, (50+($i*20)), (50+($i*20)), $black, $font, "hi");
//imageline($im, 50, 650,  650, 50, $red);
imageline($im, (50+($i*20)),Imagesy($im)-($perme[$i-1]/$numberpixel)-50,50+(($i+1)*20),Imagesy($im)-($perme[$i]/$numberpixel)-50, $red);
$i++;
}



/*
//draw current predicted
for ($i=0;$i<35;$i++){
if ($peractme[$i] != ""){
$actperme[$i]="dontshow";
} else {
$avg=($actperme[$i-3]+$actperme[$i-2]+$actperme[$i-1])/3;
$actperme[$i]=$avg+1;
}
}

$i=0;
while ( $i<35 ){
if ($actperme[$i] != "dontshow"){
imageline($im, (($i*20)),Imagesy($im)-($actperme[$i-1]/1280)-50,(($i+1)*20),Imagesy($im)-($actperme[$i]/1280)-50, $blue);
}
$i++;
}
*/
//imageline($im, (50+($i*20)), (50+($perme[($i-1)])), Imagesy($im)-(($perme[$i]/1280))+50, Imagesy($im)-(($perme[$i])+50), $red);
imagepng($im);
imagedestroy($im);
echo "$numberpixel $interval $max";

?>
