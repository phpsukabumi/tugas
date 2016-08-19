<?php
$loginhtml = '<div class="login"> <h2>Silahkan Login</h2> <form method="post"> <table> <tr> <td>Username</td> <td><input type="text" name="username" placeholder="Masukan Username" required></input></td> </tr> <tr> <td>Password</td> <td><input type="password" name="pass" placeholder="Masukan Password" required></input></td> </tr> </table> <input type="submit" name="submit" value="Login"></input> </form> </div>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	foreach ($user as $name => $value) {
		if (($name == $username) && ($pass == $user[$name])) {
			include 'daftarlink.php';
			include 'pertama.php';
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $pass;
			$tidakditemukan = false;
			break;
		} else {
			$tidakditemukan = true;
		}
	}
	if ($tidakditemukan) {
		echo "Username atau Password yang anda masukan salah";
		echo $loginhtml;
	}
} else {
	echo $loginhtml;
}
?>