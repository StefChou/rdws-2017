<?php

/*var_dump($_GET);
echo '<br/>';
var_dump(count($_GET));
echo '<br/>';*/

/*var_dump($_GET);
exit;*/

/*if (count($_GET) > 0){
	echo 'Ima elementi<br/>';
} else {
	echo 'Nema elementi<br/';
}*/

/*if (!empty($_GET)){
	echo 'Ima elementi<br/>';
} else {
	echo 'Nema elementi<br/';
}*/

if (isset($_GET['pin1']) && is_numeric($_GET['pin1']) && isset($_GET['pin2']) && is_numeric($_GET['pin2'])){
	if ($_GET['pin1'] == $_GET['pin2']) {
		echo 'Validni i isti PIN-ovi<br/>';
	} else {
		echo 'Validni ama razlicni PIN-ovi<br/>';
	}
} else {
	echo 'Nevaliden PIN<br/>';
}

echo '<a href="index_html.php">LINK</a>';

?>