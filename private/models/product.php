<?php 
class Product 
{
	public $model;
	public function __construct()
	{
		$this->model= new Database;
	}
	public function getList($table,$condition)
	{

		$result=$this->model->fetchAll("SELECT * FROM $table $condition");
		return $result;
	}
	public function getListBySex($id,$col)
	{
		$result=$this->model->fetchAll("SELECT * FROM product WHERE $col=$id");
		return $result;
	}
	public function getOne($id)
	{
		$result=$this->model->fetch("SELECT * FROM product WHERE Id=$id");
		return $result;
	}
	public function getImage($id)
	{
		$result=$this->model->fetchAll("SELECT name FROM slideshoes WHERE Image_id=$id");
		return $result;
	}
	public function delProduct($id)
	{
		$this->model->query("DELETE FROM product WHERE Id=$id");
	}
	public function getLastID($table)
	{
		$id=$this->model->fetchAll("SELECT id FROM $table ORDER BY Id DESC LIMIT 1");
		$id=$id[0]['id'];
		return $id;
	}
	public function update($id,$Name,$Detail,$Price,$Image,$PriceNew,$Date,$Quantity,$GroupProduct_It)
	{
		$this->model->query("UPDATE `product` SET `Name`='$Name',`Detail`='$Detail',`Price`='$Price',`Image`='$Image',`PriceNew`='$PriceNew',`Date`='$Date',`Quantity`='$Quantity',`GroupProduct_It`='$GroupProduct_It'WHERE Id=$id");
	}
	public function updateSlide($id,$image1,$image2,$image3)
	{
		$id=$this->model->fetchAll("SELECT Id FROM `slideshoes` WHERE Image_id=$id");
		echo $id0=$id[0]['Id'];
		echo $id1=$id[1]['Id'];
		echo $id2=$id[2]['Id'];
		$this->model->query("
			UPDATE `slideshoes` SET `name`='$image1' WHERE Id=$id0
			");
		$this->model->query("
			UPDATE `slideshoes` SET `name`='$image2' WHERE Id=$id1
			");
		$this->model->query("
			UPDATE `slideshoes` SET `name`='$image3' WHERE Id=$id2
			");
		// for ($i=1; $i <=3  ; $i++) { 
		// 	$m='$'.'image'.$i;
		// 	$this->model->query("
		// 		UPDATE slideshoes SET name = $m, WHERE id = $id
		// 		");
		// }
	}
	public function updateProduct($product)
	{
		foreach ($product as $key => $value) {
			$id= $value['Id'];
			$qty=$value['qty'];
			// print_r($product);
			// echo "
			// UPDATE product SET `Quantity` = (`Quantity`- $qty) WHERE `id` =$id
			// ";
			$this->model->query("
				UPDATE product SET `Quantity` = (`Quantity`- $qty) WHERE `id` =$id
				");
		}
	}
	public function addpro($Name,$Detail,$Price,$Image,$PriceNew,$Date,$sex,$Quantity,$GroupProduct_It)
	{
		$this->model->query
		("
			INSERT INTO `product`( `Name`, `Detail`, `Price`, `Image`, `PriceNew`, `Date`,`sex`, `Quantity`, `GroupProduct_It`) VALUES ('$Name','$Detail','$Price','$Image','$PriceNew','$Date','$sex','$Quantity','$GroupProduct_It')
			");
	}
	public function addSlide($image1,$image2,$image3)
	{
		$imgid=$this->getLastID('product')+1;
		$this->model->query
		("
			INSERT INTO `slideshoes`(`name`, `Image_id`) VALUES 
			('$image1',$imgid),
			('$image2',$imgid),
			('$image3',$imgid)
			");
	}
	public function specialPrd($limit)
	{
		$result=$this->model->fetchAll(" SELECT * FROM product	ORDER BY RAND() LIMIT $limit;");
		return $result;
	}
	public function create($name, $quantity, $unitprice, $producedDate, $desciption)
	{
		$this->model->query
		("
			INSERT INTO `sparepart`( `name`, `quantity`, `unitprice`, `producedDate`, `desciption`) VALUES ('$name', '$quantity', '$unitprice', '$producedDate', '$desciption')
			");
	}
	public function search($data)
	{
		$result=$this->model->fetchAll(" SELECT * FROM sparepart WHERE `name` LIKE '%$data%'");
		return $result;
	}
}
