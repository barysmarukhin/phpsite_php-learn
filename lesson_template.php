<?php 
include ("blocks/bd.php"); /*����������� � �����*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='lessons'",$db);
$myrow = mysql_fetch_array($result); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $myrow['meta_d']; ?>">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>������</title>
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
        <td valign="top"><p>� ���� ����� ������ ���� �� �������� ����� � ������� 
          Rupay.</p>
        <p>������, ���� � ���� ������� ����������� ��� ��� ������ 
          �����. ��������, �� ������� ��� ������� �������� � ��������� �������� 
          ������, ���������� �������, ��������� ������ �� ����� �������� � ��.</p>
        <p>�������� ������� �������� ����� �� �����:</p>
        <p><strong>1.</strong> �������� �� ������ - <a href="http://ruseller.com/p/rupay.php" target="_blank">������� 
          ���� � Rupay</a></p>
        <p align="center"><img src="lessons/280807/rupay/1.gif" width="212" height="108"></p>
        <p><strong>2.</strong> �� ����������� �������� ����� �� 
          ������ � ������ ����, ��������� �� �������:</p>
        <p align="center"><img src="lessons/280807/rupay/2.gif" width="219" height="98"></p>
        <p><strong>3.</strong> �����, ���������� ��������������� 
          ����� � ����� ������: &quot;�����������&quot;.</p>
        <p align="center"><img src="lessons/280807/rupay/3.gif" width="214" height="91"></p>
        <p><strong>4.</strong> ����, ���� �� ������ ������ �� 
          �� ����� ���������� �����, ������� �� ������ �� ���������. ��������� 
          ���� ����� ���������� ��������� ��������. ��������� �� ���� �� ������� 
          ���� ������� �� ������ &quot;��������� ����&quot;.</p>
        <p align="center"><img src="lessons/280807/rupay/4.gif" width="236" height="86"></p>
        �</td>
      </tr>
    </table></td>
  </tr>
<!--���������� ������ ����������� �������-->  
<?  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
