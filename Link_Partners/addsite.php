
<?php
include "../conn.php";
$urls=$_POST[url];

$errors=0;

if ($_POST[sitetitle] == "" || $urls == "" || $_POST[eadd] == "" || $_POST[description] ==""){
$errors=1;
		}

if ($errors!=0){
	echo "All fields are required! please hit your back button to correct the problem";
	exit;
	   	}


//========if exist======//

$sql = "SELECT * FROM addursite WHERE url = '$urls'";
$rs = mysql_query($sql,$db) or die(mysql_error());			

if (mysql_numrows($rs) > 0){
	echo "Sory but this site is already in our list";
		}
else {

//========saving======//

mysql_query ("INSERT INTO addursite (sitetitle, url, eadd, description)
		          VALUES ('$_POST[sitetitle]', '$urls', '$_POST[eadd]', '$_POST[description]')") or die (mysql_error());

echo "Your site have been added to our link partners...<br>";
echo "<a href='$url'>Home</a><br>";

echo "Date: " .date('m/d/Y');

}

?>