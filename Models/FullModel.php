<?php 

/**
 * 
 */
class FullModel extends Model
{
	public function fromToDb($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM `product` WHERE `id` = ? ORDER BY `id`");
		$stmt->execute(array($id));
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
}