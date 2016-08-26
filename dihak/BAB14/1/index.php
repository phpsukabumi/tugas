<?php
if (isset($_COOKIE['nama'])) {
	$nama = $_COOKIE['nama'];
	$tanggal = $_COOKIE['tanggal'];
	echo "Terima kasih $nama atas kunjungannya kembali ke halaman ini. Anda terakhir mengunjungi halaman ini pada tanggal $tanggal";
	setcookie("tanggal", date("j/n/Y"), time()+60*60*24*30); // Update cookie
} else {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		setcookie("nama", $nama, time()+60*60*24*30);
		setcookie("tanggal", $tanggal, time()+60*60*24*30);
		echo "Terima kasih $nama atas kunjungannya";
	} else {
		$tanggal = date("j/n/Y");
		echo '<form method="post"> <input type="text" name="nama" placeholder="Masukan nama"></input> <input type="hidden" name="tanggal" value="'.$tanggal.'"></input> <input type="submit" name="submit" value="Submit"></input> </form>';
	}
}
?>