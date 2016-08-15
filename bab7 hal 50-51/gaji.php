<?php
$jam = $_POST ['bil1'];
$perjam = 2000;
$lembur = 3000;
$kelebihan = $jam - 48;
$gajinormal = 48*2000;
$gajilebih = ($kelebihan*3000)+$gajinormal;
$gajibiasa = $jam*2000;
if ($jam>=48)
{
	echo "gaji anda : ".$gajilebih ;
}
else
{
	echo " Kamu pemales. gaji kamu : ".$gajibiasa ;
}
?>