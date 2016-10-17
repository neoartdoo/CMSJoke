<?php
 $id=$_GET[id];
include "conn.php";

    $query  = "SELECT * FROM djokes  WHERE id = '$id'"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$myrow[points] = 0;

$myrow = mysql_fetch_array($result);

if ($myrow[points] >= 1 && $myrow[points] <= 10){
$start = "<img src='$siteurl/ratepic/one.jpg'>";
}

elseif($myrow[points] >= 11 && $myrow[points] <= 20){
$start = "<img src='$siteurl/ratepic/two.jpg'>";
}

elseif($myrow[points] >= 21 && $myrow[points] <= 30){
$start = "<img src='$siteurl/ratepic/three.jpg'>";
}

elseif($myrow[points] >= 31 && $myrow[points] <= 40){
$start = "<img src='$siteurl/ratepic/four.jpg'>";
}

elseif($myrow[points] > 40){
$start = "<img src='$siteurl/ratepic/five.jpg'>";
}

else{
$start = "<img src='$siteurl/ratepic/no.jpg'>";
}



$score=$myrow[score] + 1;


    $disp = "<font size=3 face='Book Antiqua' color='#324E21'><b>$myrow[category] Jokes</font><font size=1 face='Book Antiqua' color='#000000'> >> </font>
	 <font size=2 face='Book Antiqua' color='#324E21'>$myrow[title]</font></b><br>
	<font face='Book Antiqua' size=2 color='black'>
            	<p>" .nl2br($myrow[joke]). "<p>
        	<font color=324E21 face='Book Antiqua' size=2><b>Ratings:</b></font> $start 
	<font size=1 face='Book Antiqua'> >>><a href='$siteurl/point.php?id=$myrow[id]'>
	Vote</a> for this joke!</font>";

$pagetitle="$myrow[title]";

mysql_query ("update djokes SET score = $score Where id = '$id'" );
include "template.php";


?>