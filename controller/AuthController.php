<?php

include 'Database.php';

class AuthController
{
	protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

		public function login($request)
    {
		
		$query = $this->db->pdo->prepare('SELECT id,name, priority, age, diseases, email, password, bloodgroup, allergies, is_admin FROM pacienti WHERE email = :email');
		$query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

		//if(is_array($user) && count($user) > 0 && password_verify($request['password'], $user['password']) ){
		if( (is_array($user) && count($user)) > 0 && password_verify($request['password'], $user['password']) ){
	
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['name'] = $user['name'];
			$_SESSION['priority'] = $user['priority'];
			$_SESSION['age'] = $user['age'];
			$_SESSION['diseases'] = $user['diseases'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['bloodgroup'] = $user['bloodgroup'];
			$_SESSION['allergies'] = $user['allergies'];
			$_SESSION['is_admin'] = $user['is_admin'];

			return header('Location: ./index.php');
		}
	}
}
/* <?php

include './core/Database.php';

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,name,email,password,is_admin FROM users WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['is_admin'] = $user['is_admin'];

            header("Location: index.php");
        }
    }
}
*/
 ?>