<?php
$panjang = $_POST ['bil1'];
$lebar = $_POST ['bil2'];
$kel = 2 * ($panjang+$lebar);
echo "Jika panjang = ".$panjang ;
echo "<br>Dan lebar = ".$lebar ;
echo "<br>Maka kelilingnya = ".$kel ;
echo "<br>Karna keliling persegi panjang adalah 2(p+l)";
?>