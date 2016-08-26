<style type="text/css">
td {
    border: 1px solid #000;
    width: 100px;
}

td input {
    width: 100px;
}
</style>
<?php
$nim = array("A001","A002","A003","A004","A005");
$nama = array("Agus","Budi","Amir","Acong","Siti");
$data = array("A001" => "Agus","A002" => "Budi","A003" => "Amir","A004" => "Acong","A005" => "Siti");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	function nilairata($siapa)
	{
		$nama = $siapa;
		$nilai1 = $_POST['nilai1'.$nama];
		$nilai2 = $_POST['nilai2'.$nama];
		$hasil = ($nilai1 + $nilai2) / 2;
		return $hasil;
	}
	foreach ($data as $key => $value) {
		$nilairata[] = nilairata($value);
	}
	array_multisort($nilairata, SORT_DESC, SORT_NUMERIC, $nama, $nim);
	echo "<table><tbody><tr><td>Nis</td><td>Nama</td><td>Nilai Rata Rata</td></tr>";
	for ($i=0; $i < count($nama); $i++) { 
		echo "<tr><td>".$nim[$i]."</td><td>".$nama[$i]."</td><td>".$nilairata[$i]."</td></tr>";
	}
	echo "</tbody></table>";
} else {
	echo '<form method="post"> <table> <tbody> <tr> <td>Nis</td> <td>Nama</td> <td>Nilai Ujian 1</td> <td>Nilai Ujian 2</td> </tr>';
	foreach ($data as $key => $value) {
		echo '<tr> <td>'.$key.'</td> <td>'.$value.'</td> <td><input type="text" name="nilai1'.$value.'"></input></td> <td><input type="text" name="nilai2'.$value.'"></input></td> </tr>';
	}
	echo '</tbody> </table> <input type="submit" name="submit" value="Submit"></input> </form>';
}
?>
<table>
	<tbody>
		
	</tbody>
</table>