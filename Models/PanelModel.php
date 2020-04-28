<?php

/**
 * 
 */
class PanelModel extends Model
{
	public function adminFromDB()
	{
		$stmt = $this->db->query("SELECT * FROM `admin` ORDER BY `id`");
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}

	public function allProducts()
	{
		$stmt = $this->db->query("SELECT * FROM `product` ORDER BY `id`");
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
}