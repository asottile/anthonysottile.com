<?php
$m = $_GET["m"];
$b = $_GET["b"];
//header
header("Content-type: image/png");
$im    = imagecreate(750,750);

if (stristr($m, '/')) {
list($top, $bottom) = split('[/]', $m);
$m = $top/$bottom;
}


//colors
$bgwhite = imagecolorallocate($im, 255,255,255);
$black = imagecolorallocate($im, 0,0,0);
$red = imagecolorallocate($im, 255,0,0);



imagestring($im,5, 5, 730, "If you believe you got an error please use the error report on the front math page", $black);

//get max possible
//when x = max
$maxy = ($m)*345+($b);
$maxy =round($maxy,0);
//when x = min
$miny = ($m)*(-345)+($b);
$miny = round($miny,0);
//when y = max
$maxx = (345 - ($b))/($m);
$maxx = round($maxx,0);
//when y=min
$minx = (-345 - ($b))/($m);
$minx = round($minx,0);

//check where it crosses
if (($maxx>-345) and  ($maxx<345) and ($minx>-345) and ($minx<345)) {
$crosses = "top_bottom";
} elseif (($maxy<345) and ($maxy>-345) and ($maxx<345) and ($maxx>-345)) {
$crosses = "right_top";
} elseif (($maxy<345) and ($maxy>-345) and ($minx<345) and ($minx>-345)) {
$crosses = "right_bottom";
} elseif (($miny<345) and ($miny>-345) and ($maxx<345) and ($maxx>-345)) {
$crosses = "left_top";
} elseif (($miny<345) and ($miny>-345) and ($minx<345) and ($minx>-345)) {
$crosses = "left_bottom";
} elseif (($miny<345) and ($miny>-345) and ($maxy<345) and ($maxy>-345)) {
$crosses = "left_right";
}

//make x fake points
$xrealpoint = 30;
for ($i=-345;$i<=345;$i++) {
$pointx[$i] = $xrealpoint;
$xrealpoint +=1;
}
//make y fake points
$yrealpoint = 720;
for ($i=-345;$i<=345;$i++) {
$pointy[$i] = $yrealpoint;
$yrealpoint -=1;
}


//label x
$xpos=23;
for ($i=-345;$i<=345;$i+=15) {
imagestringup($im, 2, $xpos, 24, $i, $black);
$xpos+=15;
}
//label y
$ypos=23;
for ($i=345;$i>=-345;$i-=15) {
imagestring($im,2, 4, $ypos, $i, $black);
$ypos+=15;
}
//draw x lines
for ($i=30;$i<=720;$i+=15){
//axis drawer
if ($i=="375") {
imageline($im, 30,$i+1,  720,$i+1,  $black);
imageline($im,30,  $i-1,  720, $i-1,$black);
}
imageline($im, 30, $i, 720, $i, $black);
}

//draw y lines
for ($i=30;$i<=720;$i+=15){
//axis drawer
if ($i=="375") {
imageline($im, $i+1, 30, $i+1, 720, $black);
imageline($im, $i-1, 30, $i-1, 720, $black);
}
imageline($im, $i, 30, $i, 720, $black);
}

//draw line
if ($crosses =="top_bottom") {
imageline ($im, $pointx[$maxx], $pointy[345], $pointx[$minx], $pointy[-345], $red);
} elseif ($crosses =="right_top") {
imageline ($im, $pointx[$maxx], $pointy[345], $pointx[345], $pointy[$maxy], $red);
} elseif ($crosses =="right_bottom") {
imageline ($im, $pointx[$minx], $pointy[-345], $pointx[345], $pointy[$maxy], $red);
} elseif ($crosses =="left_top") {
imageline ($im, $pointx[$maxx], $pointy[345], $pointx[-345], $pointy[$miny], $red);
} elseif ($crosses =="left_bottom") {
imageline ($im, $pointx[$minx], $pointy[-345],$pointx[-345], $pointy[$miny],  $red);
} elseif ($crosses =="left_right") {
imageline ($im,  $pointx[345],$pointy[$maxy],$pointx[-345], $pointy[$miny],  $red);
} else {
imageline ($im, $pointx[$maxy], $pointy[345], $pointx[$miny], $pointy[-345], $red);
}






//create and destroy
imagepng($im);
imagedestroy($im);
?>
