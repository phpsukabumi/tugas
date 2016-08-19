<?php
include 'datalogin.php';
include 'header.php';
if (isset($_SESSION['user'])) {
	include 'daftarlink.php';
	echo '<div class="isi"> <h2>Ini adalah isi dari halaman Link 1</h2> </div>';
} else {
	echo "Kamu belum login.";
	include 'login.php';
}
include 'footer.php';
?>