</head>
<CENTER>
<H1>������������ ���� �������� ��. 14202 ������� ������</H1>
</CENTER>

<body background="pattern_152.gif">
<tr style="font-weight:900;">
     <?php if ($_COOKIE['login']!="") echo '<td colspan=4 align=right> ��� �����: '. $_COOKIE["login"] .'</td>
	 <tr>
	   <td colspan=4 align=right> <a href="/~klokov/logout.php"> ����� </a> </td>
	 </tr>';
	   else echo '<td colspan=4 align=right> <a href="/~klokov/login.php"> ����� </a>  </td>
	 </tr>
     <tr>
	   <td colspan=4 align=right> <a href="/~klokov/register.php"> ������������������ </a> </td>
	 </tr>'; ?>
 <CENTER>
 <table style="border: 1px solid black" background="pattern_152.gif" width=90% height=5% border=1 rules="cols">
						<tr align=center >
							<font color=#1D8ea7>
							<td style="border: 1px solid black;" width=25%><a href="index.php"><b>�������</b></a></td>
							<td style="border: 1px solid black;" width=25%><a href="talk.php"><b>����� �������� ������</b></a></td>
							<td style="border: 1px solid black;" width=25%><a href="hobby.php"><b>��� �����</b></a></td>
							<td style="border: 1px solid black;" width=25%><a href="blog.php"><b>����</b></a></td>
						</tr>
					</table>
					</center>