<?php
$studenti = array(
	array('ime' => 'Stefan', 'prezime' => 'Blazevski', 'godini' => 22),
	array('ime' => 'Martin', 'prezime' => 'Danev', 'godini' => 19),
	array('ime' => 'Stefan', 'prezime' => 'Stojkovski', 'godini' => 28),
	array('ime' => 'Martin', 'prezime' => 'Postolovski', 'godini' => 22),
	array('ime' => 'Irina', 'prezime' => 'Dobrohotova', 'godini' => 24),
	);

// $brojac = 1;

?>

<table border = 1>
	<tr>
		<th>Broj</th>
		<th>Ime</th>
		<th>Prezime</th>
		<th>Godini</th>
	</tr>
	<?php foreach ($studenti as $index => $student) { ?>
		<tr>
		<td><?php echo $index+1; ?></td> <!--brojac-->
		<td><?php echo $student['ime']; ?></td>
		<td>y</td>
		<td>z</td>
		</tr>
	<?php } ?>
</table>