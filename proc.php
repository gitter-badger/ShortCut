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
				$num = rand(48,122);
				if ($num < 57 or ($num < 91 and $num > 64) or $num > 96)
					$alias .=chr($num);
				else
					$i--;
			}

			$db = new mysqli($config['host'], $config['user'],
				$config['pass'], $config['database']);
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

