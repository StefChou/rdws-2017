<?php  

$broj = 4;
// echo $broj++;
echo ++$broj;

echo '<hr/>';

$parnost = ($broj % 2 == 0) ? 'Paren' : 'Neparen';
echo $parnost;

echo '<hr/>';

if(($broj) % 2 == 0) {
	echo 'Paren';
} else {
	echo 'Neparen';
}

echo '<hr/>';

$ocenki = array(7, 8, 9, 10);
$broj_elementi = count($ocenki);
// var_dump($ocenki);
// $suma = 0;
// $index = 0;

// while($index < 4){
// 	$suma += $ocenki[$index];
// 	$index++;
// }
// echo $suma;

// echo '<hr/>';

// for( inicijalizacija ; uslov ; inkrement)
for($suma = 0, $index = 0; $index < $broj_elementi; $index++){
	$suma += $ocenki[$index];
}
echo 'For: ' .$suma;
echo '<br/>Prosek: '.$suma / $broj_elementi;

echo '<hr/>';

$ucenici = array(
	'Blazevski' => 'Stefan',
	'Danev' => 'Martin',
	'Stojkovski' => 'Stefan',
	'Postolovski' => 'Martin',
	'Dobrohotova' => 'Irina',
	);
// print_r($ucenici);

$brojac = 1;
foreach ($ucenici as $prezime => $ime){
	echo $brojac++.'. '.$ime.' '.$prezime.'<br/>';
}

echo '<hr/>'

?>