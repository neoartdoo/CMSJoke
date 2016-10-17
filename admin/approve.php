      
<?php

$id=$_GET['id'];
include "../conn.php";

mysql_query("UPDATE djokes SET status='Active' WHERE id='$id'");



echo "<h1>Jokes have been successfully approve</h1> <p>";

?>

        
        
        