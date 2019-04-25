<?php 
class M_checkout 
{
	public $model;

	public function __construct()
	{
		$this->model=new Database();
		
		
	}
	public function checkOut($user_name, $user_email, $user_phone, $amount, $message, $security, $Address){
		$this->model->query
		("
			INSERT INTO `ortransaction`( `user_name`, `user_email`, `user_phone`, `amount`, `message`, `security`, `Address`) VALUES ('$user_name', '$user_email', '$user_phone', '$amount', '$message', '$security', '$Address')
			");
	}
	public function checkCode($code)
	{
		$check=$this->model->fetch("SELECT security FROM ortransaction WHERE security='$code'");
		if (empty($check)) {
			return 0;
		}else{
			return 1;

		}
	}
	public function orderdetails($data,$last_id)
	{
		foreach ($data as $key => $val) 
		{

			$product_id=$val['Id'];
			$qty=$val['qty'];
			$amount=$val['Price']*$val['qty'];		
			$Name=$val['Name'];
			$this->model->query
			("
				INSERT INTO `orderdetail`( `ortransaction_id`, `product_id`, `qty`, `amount`,`Name`) VALUES ('$last_id','$product_id','$qty','$amount','$Name')
				");
		}
	}
	public function getIdCode($code)
	{
		$check=$this->model->fetch("SELECT Id FROM ortransaction WHERE security='$code'");
		return $check['Id'];
	}

}