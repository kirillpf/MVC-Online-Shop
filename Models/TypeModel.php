<?php 

/**
 * 
 */
class TypeModel extends Model
{
	public function fromToDb($type)
	{
		$stmt = $this->db->prepare("SELECT * FROM `product` WHERE `type` = ? ORDER BY `id`");
		$stmt->execute(array($type));
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
}