<html>

<head>
  <title>CC</title>
</head>
<?PHP 
$UU=date("d");
if($UU=="31")
{
$VAR="pink";
}
else
{
$VAR="RED";
}
?>
<body bgcolor="skyblue"  background="D:\PHP ebook\GIFS\BCKGRND1\SS1013.JPG">
<h1  align="center" style=color:red; >CONTROL CHECK </h1>
<table align="center" border="0" cellspacing="0" cellpadding="2">
<form action="cos.php" method="POST">

<tr><td> DATE</td><td><input type="textbox" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="2" maxlength="2" name="DATE2" VALUE ="<?php
echo date("d");?>">
<input type="textbox" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="6" maxlength="6" name="DATE3" VALUE ="<?php
echo date("m");?>">
<input type="textbox" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="4" maxlength="4" name="DATE4" VALUE ="<?php
echo date("Y");?>">
</td></tr>

<tr><td>START TIME</td><td><input type="textbox" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="6" maxlength="6" name="DATE1" VALUE ="<?php
echo date("his",strtotime("+630")) ;?>">
</td></tr>

<tr><td>END TIME</td><td><input type="textbox" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="6" maxlength="6" name="DATE2" VALUE ="<?php
echo date("his",strtotime("+630")) ;?>">
</td></tr>
<tr><td>FLIGHT LEVEL</td><td><input type="text" name="FL" value=""size="11" maxlength="11"></td></tr>
<tr><td>TRACK No 1</td><td><input type="text" name="track" value="" size="20" maxlength="20"></td></tr>
<tr><td>TRACK No 2</td><td><input type="text" name="track2" value="" size="20" maxlength="20"></td></tr>
<tr><td>TRACK No 3</td><td><input type="text" name="track3" value="" size="20" maxlength="20"></td></tr>
<tr><td>TRACK No 4</td><td><input type="text" name="track4" value="" size="20" maxlength="20"></td></tr>
<tr><td>TRACK No 5</td><td><input type="text" name="track5" value="" size="20" maxlength="20"></td></tr>
<tr><td>TRACK No 6</td><td><input type="text" name="track6" value="" size="20" maxlength="20"></td></tr>
<input type="hidden" style="font-family: Verdana; font-weight: bold; font-size: 12px;" size="18" maxlength="18" name="DKT">
<tr><td></td><td><input type="submit" name="submit" value="CALCULATE"/>
<input type="hidden" name="submitted" value="TRUE"/>
<input type="reset" value="RESET"/></td>
</tr>
</table>
</form>
</br>
</br>

</html>