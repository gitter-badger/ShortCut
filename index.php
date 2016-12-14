<!DOCTYPE html>
<html>
	<?php
		include_once 'includes/stylesManager.php';
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
			if (isset($_GET['u'])) {
				$config = require('config.php');
				$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' .
					$config['database'], $config['user'], $config['pass']);
				$sql = $db->prepare('SELECT link FROM urls WHERE alias = :alias');
				$sql->execute(array(':alias'=>$_GET['u']));

				header('Location: http://'.$sql->fetch()[0]); // TODO: remove http or https from url when save it in DB
			}
		?>
	</body>
</html>