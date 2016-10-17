
<?php
 
include "../conn.php";

    $limit          = 20;               
    $query_count    = "SELECT * FROM djokes WHERE  status ='pending'";    
    $result_count   = mysql_query($query_count,$db) or die (mysql_error());    
    $totalrows      = mysql_numrows($result_count); //line 65

    if(empty($page)){
        $page = 1;
    }
     
    $limitvalue = $page * $limit - ($limit);
    $query  = "SELECT * FROM djokes  WHERE status ='pending' ORDER by title asc LIMIT $limitvalue, $limit"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$num = $totalrows; //mysql_num_rows($result); //line 93

echo "<h1 align=center>Cekaju na odobrenje</h1>";

if ($num != 0 ) {

$scategory = $category ; 
      $myrow = mysql_fetch_array($result);
       do {  

   echo  "<font face='Century Gothic' size='2' color=black>
	 <b>Naslov Vica:</b> <a href='$url/jokes/$myrow[id].html'>$myrow[title]</a></font><br>
	<b>Kategorija Vica:</b> $myrow[category]<br>

  <a href = 'approve.php?id=$myrow[id]'>Odobri</a> | 
  <a href = 'deny.php?id=$myrow[id]'>Ukloni</a><br><br>"; 
 
     } while ($myrow = mysql_fetch_array($result));
    }

    $numofpages = $totalrows / $limit;
    echo  "<br>Strana(e) &nbsp;"; 

    for($i = 1; $i <= $numofpages; $i++){
        if($i == $page){
            echo  ("&nbsp;<b>$i</b>&nbsp;");
        }else{ 
	echo  ("<a href='$url/categorize.php?category=$scategory&page=$i'>$i</a>&nbsp;");
        }
	}

    if(($totalrows % $limit) != 0){
        if($i == $page){
            echo  ("&nbsp;<b>".$i."</b>&nbsp;");
        }else{
            echo  ("<a href='$url/categorize.php?category=$scategory&page=$i'>$i</a>&nbsp;");
        }
    	}
    
    mysql_free_result($result); 



?>