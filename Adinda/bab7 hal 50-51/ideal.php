<?php
$berat = $_POST ['bil1'];
$tinggi = $_POST ['bil2'];
$rumus = $tinggi-100 ;
$ideal = ($rumus*10)/100 ;
$asli = $rumus-$ideal ;
$hasil =  $asli-$berat;
// kalau berat jaraknya lebih dari 2 ke asli berarti gak ideal 
// asli-berat = 2
if ($hasil<-2)
{
	echo "kegendutan atau buncit";
}
else if ($hasil>2)
{
	echo "kurus kamu mah";
}
else if ($hasil)
{
	echo "ideal kamu";
}
?>