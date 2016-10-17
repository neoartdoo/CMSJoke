<?php

include "../conn.php";
$errors=0;

$error="The following errors occured while processing your form input.<ul>";

$category = $_POST[category];
if($_POST[category]=="none"){
$category = $_POST[newcategory];
}

//==$cat = "$category";==//

if($_POST[title] == "" || $category =="" || $_POST[joke] == ""){

$errors=1;
$error.="<li>You did not enter one or more of the required fields. <br> Please click your back button to try again. <br> ";
 }

if ($errors!=0){
    echo $error;
    echo "Click your back button to correct error";
    die("All fields are required");
    exit;
             }

//////////////////// Search for the article if exist //////////////////////////////////

 $sql = "SELECT * FROM djokes WHERE joke = '$joke' AND category='$category'";

////////////////////if found set message////////////

if(!$sql) {
die('Could not connect: ' . mysql_error());
}

$result = mysql_query($sql,$db )or die("Error ".mysql_errno().": ".mysql_error()."\nQuery: $query");
$num = mysql_numrows($result);

if ($num != 0 ) {
           echo "Joke is already in our database... ";
                 exit;
                     }   
    else {

 mysql_query("INSERT INTO djokes(title,category,joke) 
	VALUES ('$_POST[title]', '$category', '$_POST[joke]')") or die(mysql_error());

}

echo "<h2>Jokes have been save.</h2>";
echo "Return to <a href = 'entry.php'>Enter jokes again </a> | <a href = 'index.htm'>Admin</a>";

?>




 


