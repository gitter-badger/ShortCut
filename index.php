<!DOCTYPE html>
<html>
	<?php
		$info = include 'includes/siteInfo.php';
		?>
	<head>
		<meta charset="<?= $info['charset']?>">
		<title>
			<!--TODO: create function to get website name-->
		</title>
		<link rel="stylesheet" type="text/css" href="<?= 'themes/',$info['theme'],'/style.css' ?>"/>
		<link rel="stylesheet" type="text/css" href="<?= 'themes/',$info['theme'],'/rtl.css' ?>"/>
		<script type="text/javascript" rel="script" src="<?= 'themes/',$info['theme'],'/script.js'?>"></script>
	</head>
	<body>
		<?php
			require_once('themes/'.$info['theme'].'/index.php');
			if (isset($_GET['u'])) {
				$config = require('config.php');
				$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' .
					$config['database'], $config['user'], $config['pass']);
				$sql = $db->prepare('SELECT link FROM urls WHERE alias = :alias');
				$sql->execute(array(':alias'=>$_GET['u']));

				header('Location: http://'.$sql->fetch()[0]);
			}
		?>
	</body>
</html>