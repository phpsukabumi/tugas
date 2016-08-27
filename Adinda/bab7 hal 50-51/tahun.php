<?php
$tahun = $_POST ['bil1'];
$tahun2 = $tahun%4;
if ($tahun2==0)
{
	echo "tahun kabisat";
}
else 
{
	echo "bukan kabisat";
}
?>