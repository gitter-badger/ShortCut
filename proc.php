<?php
	include_once 'config.php';
	const CHARACTERS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';


	if (isset($_GET['url'])) {
		$url = str_replace(' ', '', $_GET['url']);
		if (!empty($url)) {
			// TODO:Check signed in user .
			// null value is for visitor
			$userId = null;
			$len = strlen(CHARACTERS);
			$alias = '';
			for ($i = 0; $i < $len; $i++) {
				$alias .= CHARACTERS[rand(0, $len - 1)];
			}

			$db = new mysqli($CONFIG['host'], $CONFIG['user'],
				$CONFIG['pass'], $CONFIG['DBName']);
			$sql = $db->prepare("INSERT INTO urls(userid,alias,link) VALUES (?,?,?)");
			$sql->bind_param('iss', $userId, $alias, $url);
			$sql->execute();

			$db->close();

		} else {
			// TODO : display error on index.php page .
			echo 'Please insert a valid url .';
		}
	} else {
		header('Location: index.php');
		exit();
	}