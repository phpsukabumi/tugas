<h1>Mencari angka - Soal BAB12 No 4</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$angka = $_POST['angka'];
$data = array(273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263); // Data yang akan digunakan
for ($i=0; $i < count($data); $i++) { 
	$ada = false;
	if ($data[$i] == $angka) {
		$ada = true;
		echo "Bilangan yang Anda cari ada dalam data pada urutan ke-".($i + 1);
		break;
	}
}
if ($ada == false) {
	echo "Bilangan yang anda cari tidak ditemukan";
}
} else {
echo '<form action="" method="post"><input type="text" name="angka" placeholder="Masukan angka"></input> <input type="submit" name="submit"></input></form>';
}
?>