<?php

include "conn.php"; 
     $query  = "SELECT * FROM djokes WHERE  status ='Active'  ORDER BY score DESC LIMIT 1,10"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$myrow = mysql_fetch_array($result);

	//==$myrow = mysql_fetch_array($result);==//
$disp =  "<center><font size='3' face='Arial' color='#5F5756'><b>Najbolje Šale</b></font></center><br>";
	
   do    {

if($myrow['score'] == 0 || $myrow['score'] > 0){
		
$desc = substr($myrow['joke'],0,150);
   $disp .= "<font face='arial' size='2' color='#305C11'>
 <a href='$url/jokes/$myrow[id].html'><b>$myrow[title]</b></a> Posetilaca ($myrow[score]) </font><br>
     <font face='arial' size='1' color='#000000'>$desc</font>&nbsp;<font size=1 face='Arial'><a href='$url/jokes/$myrow[id].html'>See all</a></font><br><br>"; 
}
	   }
	while ($myrow = mysql_fetch_array($result));

$url=$url;
$pagetitle = "The Visited Jokes";
include "template.php";
?>
