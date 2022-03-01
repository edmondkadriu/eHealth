<?php

include 'Database1.php';

class ContactController
{
	protected $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function all()
	{
		$query = $this->db->pdo->query('SELECT * FROM kontakti');
		return $query->fetchAll();
	}

    
	public function store($request)
	{
		$query = $this->db->pdo->prepare('INSERT INTO kontakti (emri_mbiemri, email, mesazhi ) VALUES  (:emri_mbiemri , :email, :mesazhi)');
		
        $query->bindParam('emri_mbiemri', $request['emri_mbiemri']);
        $query->bindParam('email', $request['email']);
        $query->bindParam('mesazhi', $request['mesazhi']);
		$query->execute();
		
		return header('Location: ./ContactUs.php');
	}
	public function destroy($id)
	{
		$query = $this->db->pdo->prepare('DELETE FROM kontakti WHERE id = :id');
		$query->execute(['id' => $id]);

		return header('Location: ./kontakt.php');

	}
}
