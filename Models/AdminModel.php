<?php

/**
 * 
 */
class AdminModel extends Model
{
	public function loginNewAdmin($email, $password)
	{
		$stmt = $this->db->prepare("SELECT `password` FROM `admin` WHERE `email` = ?");
		$stmt->execute(array($email));

		while ($row = $stmt->fetch()['password']) 
        {
            if(password_verify($password, $row))
            {
                $sessionQuery = $this->db->prepare("SELECT * FROM `admin` WHERE `email` = ?");
                $sessionQuery->execute(array($email));
                $res = $sessionQuery->fetch(PDO::FETCH_ASSOC);
                
                $_SESSION['admin'] = [
                    "id" => $res['id'],
                    "email" => $res['email'],
                    "name" => $res['name']
                ];

                if(!empty($res)) 
                {
					header("Location: /panel");
				} else 
				{
					session_destroy();
					return false;
				}
            }
        }
	}	
}