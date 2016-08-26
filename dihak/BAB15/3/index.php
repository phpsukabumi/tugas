<?php
/*
menghitung selisih waktu
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$jam1 = $_POST['jam1'];
	$jam2 = $_POST['jam2'];
	function detik($a)
	{
		$a = explode(":", $a);
		$jam = $a[0];
		$menit = $a[1];
		$detik = $a[2];
		$hasil = ($jam * 3600) + ($menit * 60) + $detik;
		return $hasil;
	}
	$jam1 = detik($jam1);
	$jam2 = detik($jam2);
	echo "Selisih kedua waktu adalah ".abs($jam1 - $jam2)." detik.";
} else {
	echo '<form method="post"> <table> <tbody> <tr> <td>Waktu 1</td> <td> <input type="text" name="jam1" placeholder="jam:menit:detik"></input> </td> </tr> <tr> <td>Waktu 2</td> <td> <input type="text" name="jam2" placeholder="jam:menit:detik"></input> </td> </tr> </tbody> </table> <input type="submit" name="submit" value="Submit"></input> </form>';
}
?>