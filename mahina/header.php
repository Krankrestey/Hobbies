<html>
 <head>	
 </head>

<body background="/~saltuk/Hobbies/fon.jpg">
  <h1 align=center> Welcome! </h1>
  <div align=left>
   <table width=100%>
     <tr style="font-weight:900;">
       <?php if ($_COOKIE['login']!="") echo '<td colspan=4 align=right> ��� �����: '. $_COOKIE["login"] .'</td>
	 <tr>
	   <td colspan=4 align=right> <a href="/~mahina/logout.php"> ����� </a> </td>
	 </tr>';
	   else echo '<td colspan=4 align=right> <a href="/~mahina/login.php"> ����� </a>  </td>
	 </tr>
     <tr>
	   <td colspan=4 align=right> <a href="/~mahina/register.php"> ������������������ </a> </td>
	 </tr>'; ?>
	 <tr height="50px" size=4 style="background:#0A67A3; font-weight:500;">
       <td width=25% align=center> <a href="/~mahina"> <font size=4> ������� </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/blog.php"> <font size=4> ������� </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/talk.php"> <font size=4> ������ ������ </font> </a> </td>
	   <td width=25% align=center> <a href="/~mahina/hobby.php"> <font size=4> ����� </font> </a> </td>
     </tr>
  </table>