<?php

include "../conn.php";


if($_POST[submit]=="Delete"){
mysql_query("DELETE FROM djokes where id='$_POST[id]'");
echo "<h1> Record have been successfully deleted </h1>";
echo "<a href='edit1.php'>Update Again</a> | <a href='index.htm'>Admin</a>";
exit;
}


if( $_POST[title] == "" ||   $_POST[category] =="" || $_POST[joke] == ""){
 echo "You have remove data from one of the required field <br> Please hit your back button to corrent the problem.";
  exit;
}



$sq = "UPDATE djokes SET category = '$_POST[category]', title = '$_POST[title]',  joke = '$_POST[joke]',status='Active' WHERE id = '$_POST[id]'";

	mysql_query($sq) or die('Error performing query: ' . mysql_error() );


echo "<h1> Record Has Been Successfully Updated </h1>";
echo "<a href='edit1.php'>Update Again</a> | <a href='index.htm'>Admin</a>";

          
?>