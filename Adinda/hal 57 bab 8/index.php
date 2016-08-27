<?php ?>
<html>
<head>
<title>Penghitung</title>
</head>
<body>
<h1>Hitung otomatis</h1>
	<form method="POST" action="kelbuj.htm">
		<input type="radio" name="hitung" value="A" >Keliling Bujur Sangkar<br/>
		<input type="submit" name="submit" value="Submit" />
	</form>
	<form method="POST" action="kelper.htm">
		<input type="radio" name="hitung" value="B" >Keliling Persegi Panjang<br/>
		<input type="submit" name="submit" value="Submit" />
	</form>
	<form method="POST" action="kelling.htm">
		<input type="radio" name="hitung" value="C" >Keliling Lingkaran<br/>
		<input type="submit" name="submit" value="Submit" />
	</form>
	<form method="POST" action="luseg.htm">
		<input type="radio" name="hitung" value="D" >Luas Segitiga<br/>
		<input type="submit" name="submit" value="Submit" />
	</form>
<form>
	<input type="submit" name="reset" value="reset" />
</form>
</body>
</html>