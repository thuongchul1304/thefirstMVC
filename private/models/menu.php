<?php 
class Menu 
{
	public $model='';
	public function __construct()
	{
		$this->model=new Database();
	}
	public function getMenu()
	{
		$sql="SELECT * FROM `menu`";
		$result = $this->model->fetchAll($sql);
		return $result;
	}
}