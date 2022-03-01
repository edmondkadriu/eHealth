<?php

include 'Database.php';

class NewsController
{
	protected $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function all()
	{
		$query = $this->db->pdo->query('SELECT * FROM lajmi');
		return $query->fetchAll();
	}

    public function allNews()
	{
		$query = $this->db->pdo->query('SELECT * from lajmi  ORDER BY post_time desc LIMIT 4');
		return $query->fetchAll();
    }
    
	public function store($request)
	{

		$query = $this->db->pdo->prepare('INSERT INTO lajmi (post_title, post_body, image , admin_id) VALUES  (:post_title , :post_body, :image, :admin_id)');
		
		print_r($request);
        $query->bindParam('post_title', $request['post_title']);
        $query->bindParam('post_body', $request['post_body']);
        $query->bindParam('image', $request['image']);
        $query->bindParam('admin_id', $request['admin_id']);
		$query->execute();
		
		return header('Location: ./Publications.php');
		

	}

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM lajmi WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

	public function update($id, $request)
	{
		

		$query = $this->db->pdo->prepare('UPDATE lajmi SET post_title = :post_title, post_body = :post_body, image = :image, admin_id = :admin_id WHERE id = :id');
		$query->execute([
			'post_title' => $post_title,
			'post_body' => $post_body,
			'image' => $image,
			'admin_id' => $admin_id,
			'id' => $id
		]);
		return header('Location: ./Publications.php');
	}

	public function destroy($id)
	{
		$query = $this->db->pdo->prepare('DELETE FROM lajmi WHERE id = :id');
		$query->execute(['id' => $id]);

		return header('Location: ./news.php');

	}
}

?>