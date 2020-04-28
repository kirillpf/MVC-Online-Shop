<?php 

/**
 * 
 */
class RegisterModel extends Model
{
	public function registerNewUser($email, $name, $hash) 
	{
		$stmt = $this->db->prepare("INSERT INTO `users` (`email`, `name`, `password`) VALUES (:email, :name, :hash)");
		$stmt->execute(['email' => $email, 'name' => $name, 'hash' => $hash]);

		$stmt = $this->db->prepare("SELECT * FROM `users` WHERE `email` = ?");
		$stmt->execute(array($email));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);

		$_SESSION['user'] = [
	        "id" => $res['id'],
	        "email" => $res['email'],
	        "name" => $res['name']
	    ];

		if(!empty($res)) {
			header("Location: /");
		} else {
			session_destroy("user");
			return false;
		}
	}
}