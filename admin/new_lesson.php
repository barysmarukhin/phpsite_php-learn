<? include ("lock.php");  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������� ���������� ������ �����</title>
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
       <form name="form1" method="post" action="add_lesson.php">
         <p>
           <label>������� �������� �����<br>
             <input type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>������� ������� �������� �����<br>
           <input type="text" name="meta_d" id="meta_d">
           </label>
         </p>
         <p>
           <label>������� �������� ����� ��� �����<br>
           <input type="text" name="meta_k" id="meta_k">
           </label>
         </p>
         <p>
           <label>������� ���� ���������� �����<br>
           <input name="date" type="text" id="date" value="2007-01-27">
           </label>
         </p>
         <p>
           <label>������ ������� �������� ����� � ������ �������
           <textarea name="description" id="description" cols="40" rows="5"></textarea>
           </label>
         </p>
         <p>
           <label>������� ������ ����� ����� � ������
           <textarea name="text" id="text" cols="40" rows="20"></textarea>
           </label>
         </p>
         <p>
           <label>������� ������ �����<br>
           <input type="text" name="author" id="author">
           </label>
         </p>
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="������� ���� � ����">
           </label>
         </p>
       </form>
       <p>&nbsp;</p>        </td>
      </tr>
    </table></td>
  </tr>
<!--���������� ������ ����������� �������-->  
<?  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
