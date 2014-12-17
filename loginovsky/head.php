<nav>
<ul>
<a href="/~loginovsky/index.php"><li>βμοη</li></a>
<a href="/~loginovsky/talk.php" class="right"><li>δολμαδ</li></a>
<a href="/~loginovsky/hobby.php" class="right"><li>θοββι</li></a>

<?php
if(!isset($_COOKIE['logged'])){
	        echo '<a href="ccfit.nsu.ru/~loginovsky/login.php"><li class="right">χοκτι</li></a>';
}
else
{
	        $user=substr(rtrim($_COOKIE['logged']),0,-32);
		        echo '<a href="/~loginovsky/vyhod.php"><li class="right">χωκτι</li></a>';
		        echo '<a href="/~loginovsky/addnote.php"><li class="right">δοβαχιτψ ποστ</li></a>';
			        echo '<a href=#><li class="right">πςιχετ,'.$user.'!</li></a>';
}
?>

</ul>
</nav>

