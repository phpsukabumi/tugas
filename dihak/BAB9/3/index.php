<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
<style type="text/css">
body {
    background: #0095ff;
}
#content {
    width: 500px;
    background: rgba(255, 255, 255, 0.5);
    margin: auto;
    margin-top: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.49);
    padding: 20px;
    text-align: center;
}

form input {
    display: block;
    margin: auto;
    margin-bottom: 10px;
    padding: 10px;
    width: 200px;
}

input[type="submit"] {
    background: #0095ff;
    color: #Fff;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body>
<div id="content">
	<h1>Perkalian 1 - 10</h1>
	<p>Hasil :</p>
	<?php
    for ($i=1; $i <= 10; $i++) { 
        for ($a=1; $a <= 10; $a++) { 
            $hasil = $i * $a;
            echo $i." x ".$a." = ".$hasil."<br/>";
        }
    }
    ?>
</div>
</body>
</html>