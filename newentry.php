

<?php

include "conn.php"; 
            
    $query  = "SELECT * FROM djokes WHERE  status ='Active' ORDER BY id DESC LIMIT 1,5"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$myrow = mysql_fetch_array($result);

	//==$myrow = mysql_fetch_array($result);==//
//==echo  "<center><font size='3' face='Book Antiqua' color='black'><b><u>New Entry</u></b></font></center><br>";==//
	do    {
	
	 $desc = substr($myrow['joke'],0,170);
   echo "<font face='arial' size='2' color='#324E21'>
 <a href='$url/jokes/$myrow[id].html'><b>$myrow[title]</b></a> </font><br><font face='arial' size='1'  color='black'>$desc</font>&nbsp;
<font size = '2' face='arial'>[<a href='$url/jokes/$myrow[id].html'>...<a>] <br>Category : <a href='$url/categorize.php?category=$myrow[category]'> $myrow[category]</a></font> <p>"; 

	   }
	while ($myrow = mysql_fetch_array($result));

?>
