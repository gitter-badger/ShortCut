<!DOCTYPE html>
<html>
	<?php
		include_once 'stylesManager.php';
		global $info;
		?>
	<head>
		<!--TODO: Get site default charset-->
		<meta charset="<?= $info['charset']?>">
		<title>
			<!--TODO: create function to get website name-->
		</title>
		<link rel="stylesheet" type="text/css" href="<?= 'themes/',getMainTheme(),'/style.css' ?>"/>
		<link rel="stylesheet" type="text/css" href="<?= 'themes/',getMainTheme(),'/rtl.css' ?>"/>
		<script type="text/javascript" rel="script" src="<?= 'themes/',getMainTheme(),'/script.js'?>"></script>
	</head>
	<body>
		<?php
			require_once('themes/'.getMainTheme().'/index.php');

		?>
	</body>
</html>