<?php
if ($id!="" || !empty ($id)){

include "../conn.php";

$sql = "SELECT * FROM djokes WHERE id = '$id'";
$rs = mysql_query($sql,$db);
$row = mysql_numrows($rs);
$myrow = mysql_fetch_array($rs);

if ($row == 0 ){
  echo " <h1>Nema takvog Vica</h1>";
  exit;
 } 
}
?>
 
<html>
<head>
<title>Iymeni vic</title>
</head>
<body link=black>
<table width = 50% align=left>
<tr>
<td width = 10%></td>

</td>
<td width = 10%></td>
</tr>
<tr>
<td></td>
<td>
<h1 align = center>Izmeni vic</h1>


<form method = "Post" Action = "edit1.php">
Recipe ID: &nbsp;&nbsp;&nbsp;&nbsp;
<input type  = "text" name = "id" value ="<?="$myrow[id]"?>">
<input type = "submit" Value = "Search" Name = "submit">
</form>


<p>


<form method = Post action = "update1.php">

<table width=500>
<input type = "hidden" name = "id" value = "<?="$myrow[id]"?>">

<tr>
<td widht = 20% width="75">Naslov Vica : </td> 
<td align = left width="415"><input type = text name = title size = 35 value ="<?="$myrow[title]"?>"></td>
</tr>

<tr>
<td widht = 20% width="75">Kategorija Vica : </td> 
<td align = left width="415">
<input type = "text" name = "category" size = "35" value ="<?="$myrow[category]"?>"> </td>
</tr>


<tr>
<td widht = 20% width="75">Vic:</td> 
<td align = left width="415"><textarea rows="20" name="joke" cols="40"><?="$myrow[joke]" ?> </textarea></td>
</tr>


<tr>
<td colspan = 2 width="486"> <center><input type = submit name = submit value = "Sacuvaj Promene"> <input type = "submit" name = "submit" value = "Obrisi"></td>
</tr>

</table>
</form><br>
<table align=center>
<tr>
<td>
<font size=4>
<a href="index.htm">POcetna</a>
</font>
</td>
</tr>
</table>

</body>

</html>