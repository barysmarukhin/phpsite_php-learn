<?php 
include ("blocks/bd.php"); /*����������� � �����*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='contacts'",$db);
$myrow = mysql_fetch_array($result); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
<meta name="description" content="<?php echo $myrow['meta_d']; ?>">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $myrow['title']; ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">

<!--���������� ����� �����-->
<? include("blocks/header.php");   ?> 

  <tr>
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
<!--���������� ����� ���� �����-->
<? include ("blocks/lefttd.php");  ?>      
        <td valign="top">
        <?php echo $myrow['text']; ?>
        </td>
      </tr>
    </table></td>
  </tr>
<!--���������� ������ ����������� �������-->  
<?  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
