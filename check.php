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
echo  $start =$_POST["DATE1"];
 }
if (empty($_POST["DATE2"]))
 {
 $errors[] = "You forgot to enter your first name";
 echo "You forgot  UNIT";
 }
 else
 {
 echo $end =$_POST["DATE2"];
 }
if (empty($_POST["FL"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 echo $fl =$_POST["FL"];
 }

 if (empty($_POST["track"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 echo $track =$_POST["track"];
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
 echo $track2 =$_POST["track2"];
 }
 if (empty($_POST["track3"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 echo $track3 =$_POST["track3"];
 }
 
 if (empty($_POST["track4"]))
 {
 $errors[] = "You forgot to enter your first name";
  }
 else
 {
 echo $track4 =$_POST["track4"];
 }
 }
 ?>