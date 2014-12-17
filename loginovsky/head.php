<nav>
<ul>
<a href="index.php"><li>βμοη</li></a>
<a href="talk.php" class="right"><li>δολμαδ</li></a>
<a href="hobby.php" class="right"><li>θοββι</li></a>

<?php
if(!isset($_COOKIE['logged'])){
	        echo '<a href="login.php"><li class="right">χοκτι</li></a>';
}
else
{
	        $user=substr(rtrim($_COOKIE['logged']),0,-32);
		        echo '<a href="vyhod.php"><li class="right">χωκτι</li></a>';
		        echo '<a href="addnote.php"><li class="right">δοβαχιτψ ποστ</li></a>';
			        echo '<a href=#><li class="right">πςιχετ,'.$user.'!</li></a>';
}
?>

</ul>
</nav>

