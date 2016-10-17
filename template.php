<html>
<head>
<META name=description content="<?=$joketitle?> - joke is a collection of jokes.">
<META name=keywords content="jokes, free jokes, jokes collection">
<META name=author content="Ed Pudol">
<META name=copyright content="COPYRIGHT <?=$domain?> (c) 2016">
<META name=reply-to  content="webmaster@<?=$domain?>">
<META name=ROBOTS content=INDEX,FOLLOW,ALL>
<META name=document-type content=Public>
<META name=document-rating content=General>
<META content=EN http-equiv=content-language>

<title><?=$pagetitle?> - <?=$joketitle?></title>
</head>

<body link="#324E21" vlink="#324E21" bgcolor="#223C12">

<div align="left">
  <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" height="191">
    <tr>
      <td width="798" colspan="3" background="<?=$siteurl?>/top.jpg" height="93" bordercolor="#FFFFFF">
      <p align="center"><font face="Book Antiqua" size="7" color="#305C11"><?=$joketitle?></font></td>
    </tr>
    <tr>
      <td width="798" valign="top" height="5" colspan="3" bordercolor="#FFFFFF" bgcolor="#666666"></td>
    </tr>
    <tr>
      <td width="798" valign="middle" height="15" colspan="3" bgcolor="#305C11" bordercolor="#FFFFFF">
      <font face="Book Antiqua" color="#FFFFFF" size="2">
      <a href="<?=$siteurl?>/" style="text-decoration: none">
      <font color="#FFFFFF">POcetna</font></a> | 
      <a href="<?=$siteurl?>/popular.php" style="text-decoration: none">
      <font color="#FFFFFF">Najvise pregledane</font></a> | 
      <a href="<?=$siteurl?>/week.php" style="text-decoration: none">
      <font color="#FFFFFF">Nedeljne sale</font></a> | 
      <a href="<?=$siteurl?>/daily.php" style="text-decoration: none">
      <font color="#FFFFFF">Dnevne Sale</font></a> | 
      <a href="<?=$siteurl?>/linkpartners.php" style="text-decoration: none">
      <font color="#FFFFFF">Partneri</font></a> | 
      <a href="<?=$siteurl?>/admin2/entry.php" style="text-decoration: none">
      <font color="#FFFFFF">Dodaj salu</font></a></font></td>
    </tr>
    <tr>
      <td width="798" valign="top" height="5" colspan="3" bordercolor="#305C11" bgcolor="#666666"></td>
    </tr>
    <tr>
      <td width="162" valign="top" height="18" bgcolor="#305C11" bordercolor="#305C11">
      <p align="center">
      
      <script type="text/javascript"><!--
google_ad_client = "<?=$pubId?>";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
google_ad_type = "text_image";
google_ad_channel ="";
google_color_border = "305C11";
google_color_bg = "305C11";
google_color_link = "FFFFFF";
google_color_url = "FFFFFF";
google_color_text = "FFFFFF";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>
      
      </td>
      <td width="501" valign="top" height="18" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <div align="center">
        <center>
        <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber3" width="476">
          <tr>
            <td width="476" bgcolor="#FFFFFF">
            <p align="center"><b>
            <font color="#305C11" face="Book Antiqua">
                
            </font></b></p>
           
<?=$disp?>
      </td>
          </tr>
        </table>
        </center>
      </div>
      </td>
      <td width="150" valign="top" height="18" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
          <tr>
            <td width="100%" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
            <b><font face="Book Antiqua" color="#305C11" size="2">Menu:</font></b><p>
            
            <?php include "bycategory.php"; ?>
            </td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="796" valign="top" height="18" colspan="3" bgcolor="#305C11">
      <p align="center"><font face="Century Gothic" size="1">
      <font color="#ffffff">Copyright ©<a style="TEXT-DECORATION: none" href="<?=$siteurl?>/">
      <font color="#ffffff"><?=$domain?></font></a></font>
      <font color="#ffffff"><br>Ovde nesto pise</font></font></p>
      </td>
    </tr>
  </table>
</div>

</body>

</html>