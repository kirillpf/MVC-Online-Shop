<?php 

/**
 * 
 */
class OrderModel extends Model
{
	public function allOrder()
	{
		$stmt = $this->db->prepare("SELECT * FROM `orders` ORDER BY `id`");
		$stmt->execute();
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
}