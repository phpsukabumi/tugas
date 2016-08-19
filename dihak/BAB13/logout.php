<?php
include 'datalogin.php';
include 'header.php';
if (isset($_SESSION['user'])) {
	include 'login.php';
	session_destroy();
} else {
	include 'login.php';
}
include 'footer.php';
?>
<script type="text/javascript">
	window.location.href = 'http://localhost/belajar/BAB13/';
</script>