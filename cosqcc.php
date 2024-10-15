<?php
//echo "cos 30";
$host="localhost";
$db_user="root";
$db_password="";
$db="qcc";
$conn=mysql_connect($host,$db_user,$db_password);
mysql_select_db($db,$conn) or dir (mysql_error());
$filename="output.csv"; // output.csv
$file=fopen($filename,"r");
while(($emapData=fgetcsv($file,10000,","))!== FALSE)
{
//print_r($emapData[0]);
$sql="INSERT into qcctable(TOD,TRD,FlightLevel,TrackNo,XPos,YPos,3DHeight) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]')";
mysql_query($sql);
echo "data is inserted";
}
fclose($file);
/*
$sql=("Select * from qcctable where TrackNo=$track or TrackNo=$track2 or TrackNo=$track3");
$lita=mysql_query($sql);
while($lss=mysql_fetch_array($lita))
{
$time=$lss["TOD"];
echo $time;
$hm=$time+19800;
echo "***";
echo $hm;
echo "+++";
$hour=("$hm"/3600);
echo $hour=substr($hour,0,2);
echo "+";
$min=($hm-($hour*3600))/60;
echo $min=substr($min,0,2);
echo "+";
echo $x=$hour.$min;
$sql="update qcctable set TOD=$x where TOD='$time'";
mysql_query($sql);
}*/
?>