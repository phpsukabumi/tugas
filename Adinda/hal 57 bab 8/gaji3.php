<?php
$jam = $_POST ['bil1'];
$golongan = $_POST ['huruf'];
$jamlebih = $jam-48;
switch ($golongan)
{
	case "A" :
		$hasil = 4000;
			break;
	case "B" :
		$hasil = 5000;
			break;
	case "C" :
		$hasil = 6000;
			break;
	case "D" :
		$hasil = 7500;
			break;
}
$total = $hasil*$jam ;
$pas = $hasil*48 ;
$lemb = (($jam-48)*(3000))+$pas ;
if ($jam<=48)
{
	echo "gaji kamu : " .$total ;
}
else
{
	echo "gaji kamu : " .$lemb ;
}
?>
