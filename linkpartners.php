
<?php
include "conn.php";

    $limit          = 10;               
    $query_count    = "SELECT * FROM addursite";    
    $result_count   = mysql_query($query_count,$db) or die (mysql_error());    
    $totalrows      = mysql_numrows($result_count); //line 65

    if(empty($page)){
        $page = 1;
    }
     
    $limitvalue = $page * $limit - ($limit);
    $query  = "SELECT * FROM addursite LIMIT $limitvalue, $limit"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$num = $totalrows;//mysql_num_rows($result); //line 93

if ($num != 0 ) {
 $disp = "<br><br><font size=3 face='Book Antiqua' color='#305C11'><b><li>Link Partners</font>
	<font size=2 face='Book Antiqua' color='#305C11'> >> 
<a href='$url/Link_Partners/enterursite.php'>Add Your Site</a></b></font><br>";
      
$myrow = mysql_fetch_array($result);
       do {  
    
   $disp .= "<br><font face='Book Antiqua' size=2 color='#305C11'><a href='$myrow[url]'><b>
	$myrow[sitetitle]</B></a></font><br><font color='black' face='Book Antiqua' size=1> $myrow[description]<br>"; 
 
     } while ($myrow = mysql_fetch_array($result));
    }

    $numofpages = $totalrows / $limit;
   $disp .= "<br>Page(s) &nbsp;"; 

    for($i = 1; $i <= $numofpages; $i++){
        if($i == $page){
            $disp .=  "&nbsp;<b>$i</b>&nbsp;";
        }else{ 
	$disp .= "<a href='$url/linkpartners.php?page=$i'>$i</a>&nbsp;";
        }
	}

    if(($totalrows % $limit) != 0){
        if($i == $page){
           $disp .= ("&nbsp;<b>".$i."</b>&nbsp;");
        }else{
       $disp .= "<a href='$url/linkpartners.php?page=$i'>$i</a>&nbsp;";
        }
    	}
    
    mysql_free_result($result); 

$pagetitle = "Link Partners";
$metadesc="Joke-joke-joke is a collection of jokes.";
$metakeyword="jokes, jokes collection, jokes free.";
include "template.php";

?>