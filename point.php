<?php
 
include "conn.php";
$id=$_GET[id];
$query  = "SELECT * FROM djokes WHERE id = '$id'";
$result = mysql_query($query,$db) or die("Error: " . mysql_error());


$myrow = mysql_fetch_array($result);
$points=$myrow[points] + 1;
mysql_query ("update djokes SET points = '$points' Where id = '$id'" );

    $disp = "<h1 align=center><font face='arial' color='#305C11'>Thank you for voting this joke!</font></h1>
	<font size=3 face='arial' color='#305C11'><b>$myrow[category] Jokes
	<font size=2 face='arial' color='#305C11'>>></font> $myrow[title]</b></font></center>
	<font face='arial' size=2 color='black'>
            	<p>" .nl2br($myrow[joke]). "<p>
        	Category  : 
        	<a href='$url/categorize.php?category=$myrow[category]'> $myrow[category]</a></font>";




include "template.php";
$pagetitle="Voting";

?>