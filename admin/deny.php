      
<?php

include "../conn.php";
$id=$_GET['id'];
mysql_query("DELETE FROM djokes  WHERE id='$id'");



echo "<h1>Vicevi su uklonjeni!</h1>";


?>
