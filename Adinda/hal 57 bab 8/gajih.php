<?php
$jam = $_POST ['bil1'];
$perjam = 2000;
$lembur = 3000;
$kelebihan = $jam - 48;
$gajinormal = 48*2000;
$gajilebih = ($kelebihan*3000)+$gajinormal;
$gajibiasa = $jam*2000;
$semua = $jam<=48;
$lebih = $jam>48;
switch ($jam)
{
	case $semua :
		echo "gaji kamu : ".$gajibiasa ;
			break;
	case 48 :
		echo "gaji kamu : ".$gajinormal ;
			break;
	case $lebih :
		echo "gaji kamu : ".$gajilebih ;
}
?>
