<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="color: <?php echo $fontColor; ?>">
<div id="outer-wrapper">
	<header id="header">
		<a href="/belajar/BAB11/1"><h1><font face="<?php echo $fontHeading; ?>"><?php echo $title;?></font></h1></a>
		<span class="desc"><?php echo $desc;?></span>
	</header>
	<div id="content">
		<aside id="sidebar">
			<div class="widget">
				<?php include "daftarlink.php";?>
			</div>
		</aside>
		<div id="post-wrapper">