<?php 
class M_ortransaction 
{
	public $model='';
	public function __construct()
	{
		$this->model=new Database();
	}
	public function getListTransaction()
	{
		$result = $this->model->fetchAll("SELECT * FROM ortransaction");
		return $result;
	}
	public function getOrderdetail($id)
	{
		$result = $this->model->fetchAll("SELECT php2.ortransaction.`Id`,php2.ortransaction.`user_name`,php2.ortransaction.`security`,php2.ortransaction.`status`,php2.ortransaction.`created`,php2.orderdetail.`qty`,php2.orderdetail.`amount`,php2.orderdetail.`data`,php2.orderdetail.`Name`
			FROM php2.ortransaction 
			INNER JOIN php2.orderdetail
			ON php2.ortransaction.Id = php2.orderdetail.ortransaction_id
			WHERE php2.ortransaction.Id=$id");
		return $result;
	}
	public function Action($id,$qty)
	{
		$this->model->query("UPDATE `product` SET `Quantity` = (`Quantity`-$qty) WHERE `Id` = $id");
	}
	public function Update($table,$column,$id,$status)
	{
		$this->model->query("UPDATE `$table` SET `status` = $status WHERE `$column` = $id");
	}

}