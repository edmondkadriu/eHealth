<?php

include 'Database1.php';

class AboutUsController
{
	protected $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function all()
	{
		$query = $this->db->pdo->query('SELECT * FROM pacienti');
		return $query->fetchAll();
	}

	
}

?>