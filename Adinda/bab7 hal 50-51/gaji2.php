<?php
$jam = $_POST ['bil1'];
$gol = $_POST ['bil2'];
$A = 4000;
$B = 5000;
$C = 6000;
$D = 7500;
$jamlebih = $jam-48;
$lembur = 3000;
$gajibiasaa = $jam*4000;
$gajibiasab = $jam*5000;
$gajibiasac = $jam*6000;
$gajibiasad = $jam*7500;
$gajinormala = 48*4000;
$gajinormalb = 48*5000;
$gajinormalc = 48*6000;
$gajinormald = 48*7500;
$gajilebiha = ($jamlebih * 3000)+$gajinormala;
$gajilebihb = ($jamlebih * 3000)+$gajinormalb;
$gajilebihc = ($jamlebih * 3000)+$gajinormalc;
$gajilebihd = ($jamlebih * 3000)+$gajinormald;
if (($gol==A)&&($jam>=48))
{
	echo "gaji kamu : ".$gajilebiha ;
}
else if (($gol==A)&&($jam<48))
{
	echo "gaji kamu : ".$gajibiasaa ;
}
else if (($gol==B)&&($jam>=48))
{
	echo "gaji kamu : ".$gajilebihb;
}
else if (($gol==B)&&($jam<48))
{
	echo "gaji kamu : ".$gajibiasab ;
}
else if (($gol==C)&&($jam>=48))
{
	echo "gaji kamu : ".$gajilebihc ;
}
else if (($gol==C)&&($jam<48))
{
	echo "gaji kamu : ".$gajibiasac ;
}
else if (($gol==D)&&($jam>=48))
{
	echo "gaji kamu : ".$gajilebihd ;
}
else if (($gol==D)&&($jam<48))
{
	echo "gaji kamu : ".$gajibiasad ;
}