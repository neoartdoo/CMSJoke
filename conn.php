<?php
$dbname="malasala"; //your database name
$dbuser="root"; //your database user name
$dbpass=""; //your database password

$db = @ mysql_connect("localhost","$dbuser","$dbpass");
@ mysql_select_db("$dbname",$db);

$domain = "edpudol.com"; //Enter your domain here for SEO purpose only
$siteurl ="http://localhost/cms"; // please specify your site url

$pubId="pub-5071570080813531";
$url="http://localhost/cms"; // no / at the end of url
$joketitle="Mala Sala od sajta"; //put your joke site title here... will show at the top of the site.


?>