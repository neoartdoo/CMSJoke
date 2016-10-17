<?php

include "conn.php";

$desc = array();



$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$disp = "<p align='center'>
            <b><font color='#305C11' face='arial' size='3'>Jokes For The Week</font></b></p>";

$pro = substr($datas['joke'],0,110);
$desc[0] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[0]<br> "; 

$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,110);
$desc[1] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[1]<br> "; 


$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,110);
$desc[2] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[2]<br> "; 


$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,210);
$desc[3] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[3]<br> "; 

$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,210);
$desc[4] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[4]<br> "; 



$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,210);
$desc[5] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[5]<br> "; 



$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,210);
$desc[6] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[6]<br> "; 



$dt = rand(0,1000);
$sql ="SELECT * FROM djokes LIMIT $dt,1";
$rs = mysql_query($sql, $db) or die (mysql_error());
$datas = mysql_fetch_array($rs);

$pro = substr($datas['joke'],0,210);
$desc[7] ="<a href='$url/jokes/$datas[id].html'>
	<font color='#305C11' size=2 face='arial'><b>$datas[title]<b></a></b><br>
	<font color='black' size=1 face='arial'>$pro</font>&nbsp;
	[<a href='$url/jokes/$datas[id].html'><font color='black' size=1 face='arial'>...</a>]</font><br>";
$disp .=  "$desc[7]"; 




$pagetitle = "Ya ovu nedelju";
include "template.php";



?>
 