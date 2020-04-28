<?php 

/**
 * 
 */
class ProductModel extends Model
{
	public function addToDB($title, $type, $producer, $description, $model, $country, $data, $price, $path)
	{
		$stmt = $this->db->prepare("INSERT INTO `product` (`title`, `type`, `producer`, `description`, `model`, `country`, `date`, `price`, `img`) VALUES (:title, :type, :producer, :description, :model, :country, :data, :price, :ipath)");
		$stmt->execute(['title' => $title, 'type' => $type, 'producer' => $producer, 'description' => $description, 'model' => $model, 'country' => $country, 'data' => $data, 'price' => $price, 'ipath' => $path]);
	}
}