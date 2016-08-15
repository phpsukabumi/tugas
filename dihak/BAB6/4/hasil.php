<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4</title>
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
#content h1 {
    font-size: 25px;
}
form {
    line-height: 40px;
}
tr {
    text-align: left;
}

tr td:nth-child(1) {
    width: 150px;
    vertical-align: top;
}

table {margin: auto;}

tr td:nth-child(2):before {content: ':';margin-right: 10px;vertical-align: top;}

input[type="text"], textarea {
    width: 230px;
    padding: 10px;
}
input[type="submit"] {
    margin-top: 10px;
    background: #0095ff;
    padding: 10px;
    color: #Fff;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body>
<div id="content">
	<h1>Pendaftaran Online</h1>
	<p>Hasil :</p>
    <table>
        <tbody>
            <?php
                echo "<tr><td>Nama Lengkap</td>";
                echo "<td>".$_POST['namalengkap']."</td><tr/>";
                echo "<tr><td>Tempat Lahir</td>";
                echo "<td>".$_POST['tmplahir']."</td><tr/>";
                echo "<tr><td>Tanggal Lahir</td>";
                echo "<td>".$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn']."</td><tr/>";
                echo "<tr><td>Alamat Rumah</td>";
                echo "<td>".$_POST['Alamat']."</td><tr/>";
                echo "<tr><td>Jenis Kelamin</td>";
                echo "<td>".$_POST['klmn']."</td><tr/>";
                echo "<tr><td>Asal Sekolah</td>";
                echo "<td>".$_POST['sekolah']."</td><tr/>";
                echo "<tr><td>Nilai UAN</td>";
                echo "<td>".$_POST['nilaiuan']."</td><tr/>";
            ?>
        </tbody>
    </table>
</div>
</body>
</html>