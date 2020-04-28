<?php

/**
 * 
 */
class IndexModel extends Model
{
	public function fromToDb()
	{
		$stmt = $this->db->query("SELECT * FROM `product` ORDER BY `id`");
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
	
	public function page()
	{
		header("Location: full");
	}
}