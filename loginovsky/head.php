<nav>
<ul>
<a href="ccfit.nsu.ru/~loginovsky/index.php"><li>����</li></a>
<a href="ccfit.nsu.ru/~loginovsky/talk.php" class="right"><li>������</li></a>
<a href="ccfit.nsu.ru/~loginovsky/hobby.php" class="right"><li>�����</li></a>

<?php
if(!isset($_COOKIE['logged'])){
	        echo '<a href="ccfit.nsu.ru/~loginovsky/login.php"><li class="right">�����</li></a>';
}
else
{
	        $user=substr(rtrim($_COOKIE['logged']),0,-32);
		        echo '<a href="ccfit.nsu.ru/~loginovsky/vyhod.php"><li class="right">�����</li></a>';
		        echo '<a href="ccfit.nsu.ru/~loginovsky/addnote.php"><li class="right">�������� ����</li></a>';
			        echo '<a href=#><li class="right">������,'.$user.'!</li></a>';
}
?>

</ul>
</nav>

