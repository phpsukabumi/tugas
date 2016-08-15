<?php
$usia = $_POST ['bil1'];
if ($usia<=5)
{
		echo "balita";
}
else if (($usia>=6)&&($usia<=16))
{
	echo "anak-anak";
}
else if (($usia>=17)&&($usia<=50))
{
	echo "dewasa";
}
else
{
	echo "Tua";
}
?>