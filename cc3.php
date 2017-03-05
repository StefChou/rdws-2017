<?php 
$predavac = array('ime' => 'Gorjan', 'prezime' => 'Ilievski', 'godini' => 29);
?>

<table border = 1>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>

<?php foreach ($predavac as $key => $value) { ?>
	<tr>
		<td><?php echo $key?></td>
		<td><?php echo $value?></td>
	</tr>
<?php } ?>

</table>