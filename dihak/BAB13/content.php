<?php
if (isset($_SESSION['user'])) {
	include 'daftarlink.php';
	include 'pertama.php';
} else {
	include 'login.php';
}
?>