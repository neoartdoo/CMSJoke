<?php 

include "conn.php";

$sql = "SELECT category FROM djokes GROUP BY category order by category asc";
$rst=mysql_query($sql,$db) or die(mysql_error());
$datas = mysql_fetch_array($rst);

do{
$cats = $datas['category'];

$sq = "SELECT category FROM djokes  WHERE category = '$cats'";
$rs=mysql_query($sq,$db) or die(mysql_error());
$total = mysql_numrows($rs);

if($total > 0){
echo "<font size=2 face='Book Antiqua' color='#324E21'>
<a href='$url/$datas[category].html' style='text-decoration: none'>$cats Jokes</a></font><font size=1 face='Century Gothic'> ($total)</font><br>";
}

else{
echo "Category is $cats total record is 0<br>";
}

}while($datas = mysql_fetch_array($rst));

?>