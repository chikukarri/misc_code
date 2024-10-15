<?php
header("Content-Type:application/vnd.ms-excel");
header("Content-disposition:attachment;filename=spreadsheet.xls");
//echo "hello";
$host="localhost";
$db_user="root";
$db_password="";
$db="qcc";

$track=294;
$track2=294;
$track3=294;
$track4=294;
$track5=294;
$track6=294;
$hourr=14;
$minut=00;
$secs=00;
$hourrr=15;
$minutt=00;
$secss=00;
$start=(($hourr*3600)+($minut*60)+($secs))-19800;
$end=(($hourrr*3600)+($minutt*60)+($secss))-19800;
$m=0;

$conn=mysql_connect($host,$db_user,$db_password);
mysql_select_db($db,$conn) or dir (mysql_error());
$sql=("Select * from qcctable where (TrackNo=$track or TrackNo=$track2 or TrackNo=$track3 or TrackNo=$track4 or TrackNo=$track5 or  TrackNo=$track6 ) and  (TOD<=$end and TOD>=$start)");
$lita=mysql_query($sql);
if($m==0)
{
echo "<table><tr><th>TOD</th><td>TRD</td><td>FlightLevel</td><td>TrackNo</td><td>XPos</td><td>YPos</td><td>3DHeight</td><td>ERROR</TD></tr>";
while($lss=mysql_fetch_array($lita))
{
echo "<tr >";
echo "<td style=color:green;>";
$x=$lss["TOD"];
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
//echo "***";
//echo $lss["TOD"];
echo "</td>";
echo "<td style=color:red;>";
echo $lss["TRD"];
echo "</td>";
echo "<td style=color:blue;>";
$tt=$lss["FlightLevel"];
$tt=$tt*0.0328;
$rtaa=substr($tt,0,3);
echo $rtaa;
echo "</td>";
echo "<td style=color:red;>";
echo $lss["TrackNo"];
echo "</td>";
echo "<td>";
echo $lss["XPos"];
echo "</td>";
echo "<td>";
echo $lss["YPos"];
echo "</td>";
echo "<td style=color:blue;>";
$rt=$lss["3DHeight"];
$rt=$rt*0.0328;
$rta=substr($rt,0,3);
echo $rta;
echo "</td>";
echo "<td>";
echo $rtaa-$rta;
echo "</td>";
echo "</tr>";


}
echo "</table>";
}
?>