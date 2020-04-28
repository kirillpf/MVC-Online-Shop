<?php 

/**
 * 
 */
class SubmitModel extends Model
{
	public function order($status, $name, $email, $phone, $address)
	{
		$stmt = $this->db->prepare("INSERT INTO `orders` (`status`, `name`, `email`, `phone`, `address`) VALUES (:status, :name, :email, :phone, :address)");
		$stmt->execute(['status' => $status, 'name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address]);

		$_SESSION['order'] = $email;

		header("Location: /");
	}
}