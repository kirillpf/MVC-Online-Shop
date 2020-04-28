<?php

/**
 * 
 */
class NewModel extends Model
{
	public function categoryToDB($title, $type, $description, $path)
	{
		$stmt = $this->db->prepare("INSERT INTO `category` (`title`, `type`, `description`, `img`) VALUES (:title, :type, :description, :img)");
        $stmt->execute(['title' => $title, 'type' => $type, 'description' => $description, 'img' => $path]);
	}
}