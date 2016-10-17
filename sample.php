<?php

include "conn.php";

$desc = array();



$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,110);
$desc[0] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#324E21' size=2 face='arial' style='text-decoration: none'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>View all</a></font><br>";
echo "$desc[0]<br> "; 


$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,110);
$desc[1] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#324E21' size=2 face='arial' style='text-decoration: none'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>View all</a></font><br>";
echo "$desc[1]<br> "; 


$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,110);
$desc[2] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#324E21' size=2 face='arial' style='text-decoration: none'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>View all</a></font><br>";
echo "$desc[2]<br> "; 

//==include "template.php";==//

?>
 