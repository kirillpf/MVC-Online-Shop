<?php

/**
 * 
 */
class AddModel extends Model
{
	public function addNewAdmin($email, $name, $surname, $role, $phone, $hash)
	{
		$stmt = $this->db->prepare("INSERT INTO `admin` (`email`, `name`, `surname`, `role`, `phone`, `password`) VALUES (:email, :name, :surname, :role, :phone, :hash)");
        $stmt->execute(['email' => $email, 'name' => $name, 'surname' => $surname, 'role' => $role, 'phone' => $phone, 'hash' => $hash]);

	}	
}