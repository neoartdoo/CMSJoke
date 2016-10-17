<?php
 $category = $_GET['category'];
 $page=$_GET['page'];
include "conn.php";

    $limit          = 10;               
    $query_count    = "SELECT * FROM djokes WHERE category ='$category' AND  status ='Active'";    
    $result_count   = mysql_query($query_count,$db) or die (mysql_error());    
    $totalrows      = mysql_numrows($result_count); //line 65

    if(empty($page)){
        $page = 1;
    }
    
    $limitvalue = $page * $limit - ($limit);
    $query  = "SELECT * FROM djokes  WHERE category = '$category' AND status ='Active' ORDER by title asc LIMIT $limitvalue, $limit"; 
    $result = mysql_query($query,$db) or die("Error: " . mysql_error());

$num = $totalrows; //mysql_num_rows($result); //line 93

$disp = "<center><font size ='3' face='arial' color='#324E21'>
         <b>$category Category</b></font></center><br>";




if ($num != 0 ) {

$scategory=$category;
      $myrow = mysql_fetch_array($result);
       do {  
  $desc = substr($myrow['joke'],0,180);
   $disp .= "<font face='arial' size='2' color='#324E21'>
 <a href='$url/jokes/$myrow[id].html'><b>$myrow[title]</b></a> </font><br><font face='arial' size='1' color='black'>$desc</font>&nbsp;
<a href='$url/jokes/$myrow[id].html'><font color='black' size=1 face='arial'>View all</a></font> <br><br>"; 
     } while ($myrow = mysql_fetch_array($result));
    }

    $numofpages = $totalrows / $limit;
    $disp .= "<br>Page(s) &nbsp;"; 

    for($i = 1; $i <= $numofpages; $i++){
        if($i == $page){
            $disp .= ("&nbsp;<b>$i</b>&nbsp;");
        }else{ 
	$disp .= ("<a href='$url/categorize.php?category=$scategory&page=$i'>$i</a>&nbsp;");
        }
	}

    if(($totalrows % $limit) != 0){
        if($i == $page){
            $disp .= ("&nbsp;<b>".$i."</b>&nbsp;");
        }else{
            $disp .= ("<a href='$url/categorize.php?category=$scategory&page=$i'>$i</a>&nbsp;");
        }
    	}
    
    mysql_free_result($result); 

$pagetitle="$category";
include "template.php";

?>
