<?php
session_start();
/**
 * 
 */
class LoginModel extends Model
{
	public function loginNewUser($email, $password)
	{
		$stmt = $this->db->prepare("SELECT `password` FROM `users` WHERE `email` = ?");
		$stmt->execute(array($email));

		while ($row = $stmt->fetch()['password']) 
        {
            if(password_verify($password, $row))
            {
                $sessionQuery = $this->db->prepare("SELECT * FROM `users` WHERE `email` = ? ");
                $sessionQuery->execute(array($email));
                $res = $sessionQuery->fetch(PDO::FETCH_ASSOC);
                
                $_SESSION['user'] = [
                    "id" => $res['id'],
                    "email" => $res['email'],
                    "name" => $res['name']
                ];

                if(!empty($res)) 
                {
					header("Location: /");
				} else 
				{
					session_destroy("user");
					return false;
				}
            }
        }
    }
}