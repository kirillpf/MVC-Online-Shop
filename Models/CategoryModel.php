<?php 

/**
 * 
 */
class CategoryModel extends Model
{
	public function allCategory()
	{
		$stmt = $this->db->query("SELECT * FROM `category` ORDER BY `id`");
		$result = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}
}