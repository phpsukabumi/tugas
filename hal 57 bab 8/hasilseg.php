<?php
$alas = $_POST ['bil1'];
$tinggi = $_POST ['bil2'];
$hasil = ($alas / 2)*$tinggi ;
echo "Jika alasnya = ".$alas ;
echo "<br>dan tingginya = ".$tinggi ;
echo "<br>Maka luasnya = ".$hasil ;
echo "<br>Karna luas adalah 1/2 alas x tinggi";
?>