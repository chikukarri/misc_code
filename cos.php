<?php





$x=1;
 if ($x==1)
 {
 $errors = array();
 // Check for a first name:
if (empty($_POST["DATE1"]))
 {
 $errors[] = "You forgot to enter your first name";
 echo "You forgot STARTING TIME ";
 }
 else
 {
 //echo "lll";
$startime =$_POST["DATE1"];
 }
if (empty($_POST["DATE2"]))
 {
 $errors[] = "You forgot to enter your first name";
 echo "You forgot  UNIT";
 }
 else
 {
// echo "lll";
  $endtime =$_POST["DATE2"];
 }
if (empty($_POST["FL"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 $fll =$_POST["FL"];
 }

 if (empty($_POST["track"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 $track =$_POST["track"];
 }
 
 if (empty($_POST["track1"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 $track1 =$_POST["track1"];
 }
 if (empty($_POST["track2"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 $track2 =$_POST["track2"];
 }
 if (empty($_POST["track3"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
  $track3 =$_POST["track3"];
 }
 
 if (empty($_POST["track4"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
  $track4 =$_POST["track4"];
 }
 if (empty($_POST["track5"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
  $track4 =$_POST["track5"];
 }
 
 if (empty($_POST["track6"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
  $track4 =$_POST["track6"];
 }





















//echo strtotime("+630");

//echo "cos 30";
$counter=0;
$host="localhost";
$db_user="root";
$db_password="";
$db="qcc";
//$track=686;
//$track2=775;
//$track3=882;
//$track4=886;
$fl=$fll/0.0328;
$fl=10671;
$fla=$fl+458;
$flb=$fl-458;
$syn_total=0;

//timeconeversion
//echo "**************";
//echo $startime;
$hourr=substr($startime,0,2);
//echo $hourr;
//echo "**************";
$minut=substr($startime,2,2);
//echo $minut;
//echo "**************";
$secs=substr($startime,4,4);
//echo $secs;
//echo "**************";
$hourrr=substr($endtime,0,2);
$minutt=substr($endtime,2,2);
$secss=substr($endtime,4,4);
$start=(($hourr*3600)+($minut*60)+($secs))-19800;
$end=(($hourrr*3600)+($minutt*60)+($secss))-19800;
echo $start;
echo "ll";
echo $end;
$conn=mysql_connect($host,$db_user,$db_password);
mysql_select_db($db,$conn) or dir (mysql_error());

//$rt=0;

$sql=("Select * from qcctable where (TrackNo=$track or TrackNo=$track2 or TrackNo=$track3 or TrackNo=$track4 or TrackNo=$track5 or  TrackNo=$track6) and  (TOD<=$end and TOD>=$start)");
$lita=mysql_query($sql);
while($lss=mysql_fetch_array($lita))
{
$y=$lss["TOD"];
break;
}


//echo "</br>";

while($lss=mysql_fetch_array($lita))
{
$counter=$counter+1;
$x=$lss["TOD"];
}

echo "</br>";
echo $y;
echo $x;


echo "Total Scans=";
echo $total=($x-$y)/10;
echo "</br>";


//echo "</br>";
//echo $rt;
echo "Total Sync Avail=";
echo $counter;
echo "</br>";
$total_ht=0;
$total_htt=0;

$sq=("Select * from qcctable where (TrackNo=$track or TrackNo=$track2 or TrackNo=$track3 or TrackNo=$track4 or TrackNo=$track5 or  TrackNo=$track6) and  (TOD<=$end and TOD>=$start) and (XPos>=-100 and XPos<=100)");
$lita=mysql_query($sq);
while($lss=mysql_fetch_array($lita))
{
$total_htt=$total_htt+1;
//echo "ppp";
}


////
$sql=("Select * from qcctable where (TrackNo=$track or TrackNo=$track2 or TrackNo=$track3 or TrackNo=$track4 or TrackNo=$track5 or  TrackNo=$track6) and (3DHeight >= $flb and 3DHeight <= $fla)and (XPos>=-100 and XPos<=100) and (TOD<=$end and TOD>=$start)");
$lita=mysql_query($sql);
while($lss=mysql_fetch_array($lita))
{
$total_ht=$total_ht+1;
}
echo "Total ht scans=";
echo $total_htt;
echo "</br>";
echo "Total correct ht scans=";
echo $total_ht;
echo "</br>";

///
echo "Total Sync Percentage=";
echo $syn=($counter/$total)*100;
echo "</br>";
echo "Total Height Percentage=";
echo $result=($total_ht/$total_htt)*100;
}
 else
 {
 echo "nothing";
 }
?>