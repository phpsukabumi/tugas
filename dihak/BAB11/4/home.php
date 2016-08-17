<?php
include "header.php";
?>
<h1>Menghitung Saldo</h1>
<p>Isikan form dibawah ini :</p>
<form method="post" action="hasil.php">
    <input type="text" name="saldo" placeholder="Masukan saldo"></input>
    <input type="text" name="bulan" placeholder="Masukan total bulan"></input>
	<input type="submit" name="submit" value="Submit" />
</form>
<?php
include "footer.php";
?>