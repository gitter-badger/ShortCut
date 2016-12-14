<?php
	$config = require('config.php');

	if (isset($_GET['url'])) {
		$url = str_replace(' ', '', $_GET['url']);
		if (!empty($url)) {
			// TODO:Check signed in user .
			// null value is for visitor
			$userId = null;
			$alias = '';
			for ($i = 0; $i < 7; $i++) {
				$num = rand(48, 122);
				if ($num < 57 or ($num < 91 and $num > 64) or $num > 96)
					$alias .= chr($num);
				else
					$i--;
			}

			$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' .
				$config['database'], $config['user'], $config['pass']);
			$sql = $db->prepare('INSERT INTO urls(userid,alias,link) VALUES (:id,:alias,:link)');
			$sql->bindParam(':id', $userId);
			$sql->bindParam(':alias', $alias);
			$sql->bindParam(':link', $url);

			$sql->execute();

			unset($db);
			header('Location: index.php?result=' . $alias);
		} else {
			header('Location: index.php?err=1');
		}
	} else {
		header('Location: index.php');
		exit();
	}