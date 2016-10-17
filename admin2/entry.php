<?php
include "../conn.php";

$sql = "select category from djokes group by category order by category";
$rst = mysql_query($sql,$db) or die (mysql_error());
$datas = mysql_fetch_array($rst);
$list = "<option selected value='none'>Odaberi Kategoriju</option>";
do{
$list .= "<option value='$datas[category]'>$datas[category]</option>";
}while($datas = mysql_fetch_array($rst));
$list .= "<option value='none'>Unesi novu kategoriju</option>";
?>


<html>
<head>
<title>Unos Vica</title>
</head>
<body vlink=black link=black>

<h1 align=center> Unesi Ovde vic!</h1>

<form method = Post action ="in.php">
<align =center>
<table width =100%>
<tr>
<td width = 20%> Naslov Vica : </td>
<td align =left><input type = text name = title size = 45>
</tr>

<tr>
 <td widht = 20%>Kategorija : </td> 
 <td align = left>
	<select size="1" name="category">
	<?=$list?>
			</select>
 </td>
</tr> 
<tr>
<td>Ili nova kategorija:</td><td> <input type="text" name="newcategory" size ="39"></td>
</tr>


<tr>
<td widht = 20%>Vicevi :</td> 
<td align = left><textarea rows = 20 name= "joke" cols = 40></textarea></td>
</tr>


<tr>
<td colspan =2> <center><input type = submit name = submit value = "Sa;uvaj Vic"></td>

</tr>
</table>
</form>





</body>
</html>