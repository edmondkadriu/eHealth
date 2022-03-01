<?php

include 'Database.php';

class UserController
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

	public function store($request)
	{
		isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;
		$password = password_hash($request['password'], PASSWORD_DEFAULT);

		$query = $this->db->pdo->prepare('INSERT INTO pacienti (name, priority, age, diseases, email, password, bloodgroup, allergies, is_admin) VALUES (:name, :priority, :age, :diseases, :email, :password, :bloodgroup, :allergies, :is_admin)');
		
	print_r($request);
		$query->bindParam(':name', $request['name']);
		$query->bindParam(':priority', $request['priority']);
		$query->bindParam(':age', $request['age']);
		$query->bindParam(':diseases', $request['diseases']);
		$query->bindParam(':email', $request['email']);
		$query->bindParam(':password', $password);
		$query->bindParam(':bloodgroup', $request['bloodgroup']);
		$query->bindParam(':allergies', $request['allergies']);
		$query->bindParam(':is_admin', $isAdmin);
		$query->execute();
		
		return header('Location: ./index.php');
		

	}

	 public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM pacienti WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }
	public function update($id, $request)
	{

		isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;

        $query = $this->db->pdo->prepare('UPDATE pacienti SET name = :name, priority = :priority, age = :age, diseases = :diseases, email = :email, bloodgroup = :bloodgroup, allergies = :allergies, is_admin = :is_admin WHERE id = :id');
		$query->execute([
			'name' => $request['name'],
			'priority' => $request['priority'],
			'age' => $request['age'],
			'diseases' => $request['diseases'],
			'email' => $request['email'],
			'bloodgroup' => $request['bloodgroup'],
			'allergies' => $request['allergies'],
			'is_admin' => $isAdmin,
			'id' => $id
        ]);

        return header('Location: ./index.php');
    }

	public function destroy($id)
	{
		$query = $this->db->pdo->prepare('DELETE FROM pacienti WHERE id = :id');
		$query->execute(['id' => $id]);

		return header('Location: ./index.php');

	}
}

?>