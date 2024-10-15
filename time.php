<?php
$x=64100;
$y=$x+19800;
$yy=$y/3600;
$hour=substr($yy,0,2);
$hh=($hour*3600);
$zz=($y-$hh)/60;
$minu=substr($zz,0,2);
$hh=$hour*3600;
$mm=$minu*60;
$aa=($y-($hh+$mm));
$aa=substr($aa,0,2);
echo $hour;
echo ":";
echo $minu;
echo ":";
echo $aa;
?>