<nav>
<ul>
<a href="index.php"><li>����</li></a>
<a href="talk.php" class="right"><li>������</li></a>
<a href="hobby.php" class="right"><li>�����</li></a>

<?php
if(!isset($_COOKIE['logged'])){
	        echo '<a href="login.php"><li class="right">�����</li></a>';
}
else
{
	        $user=substr(rtrim($_COOKIE['logged']),0,-32);
		        echo '<a href="vyhod.php"><li class="right">�����</li></a>';
		        echo '<a href="addnote.php"><li class="right">�������� ����</li></a>';
			        echo '<a href=#><li class="right">������,'.$user.'!</li></a>';
}
?>

</ul>
</nav>

