<?php

	class DBHelper
	{
		private $db;

		function __construct()
		{
			include_once 'config.php';
			global $CONFIG;
			$this->db = new mysqli($CONFIG['host'], $CONFIG['user'],
				$CONFIG['pass'], $CONFIG['DBName']);
		}

		function post($userId, $alias, $url)
		{
			$sql = $this->db->prepare("INSERT INTO urls(userid,alias,link) VALUES (?,?,?)");
			$sql->bind_param('iss', $userId, $alias, $url);
			$sql->execute();
		}

		function __destruct()
		{
			$this->db->close();
		}
	}