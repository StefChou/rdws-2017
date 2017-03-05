<?php

if ($_GET['strana'] == 'studenti') {
	include 'cc3-1.php';
} else {
	include 'cc3.php';
}

?>

<a href="?strana=predavaci">Predavac</a><br/>
<a href="cc3-2.php?strana=studenti">Studenti</a>