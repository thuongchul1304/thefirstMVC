<?php 
class Checkout extends Controller
{
	public $code;
	public $checkout;
	public $product;
	public function __construct()
	{
		parent::__construct();
		$this->code=$this->getCodeSecurity();
		$this->checkout=new M_checkout();
		$this->product=new Product();
		session_start();
		

	}
	public function index()
	{
		$db=new Menu();
		$data= $db->getMenu();
		
		$list_country=$this->getListCountry();
		do {
			$shorturl = $this->code;
			$q = $this->checkout->checkCode($shorturl);
		} while($q==1);
		$this->load->view('checkout',array('data'=>$data,'list_country'=>$list_country));
		if (isset($_POST['checkout'])) {
			$user_name=$_POST['user_name'];
			$user_email=$_POST['user_email'];
			$user_phone=$_POST['user_phone'];
			$amount=$_POST['amount'];
			$message=$_POST['message'];
			$_SESSION['code']=$shorturl;
			$Address=$_POST['address'];
			$this->checkout->checkOut($user_name, $user_email, $user_phone, $amount, $message, $_SESSION['code'], $Address);
			echo "<script>alert('Thành công');window.location='".BASE_URL."/frontend/checkout/payment'</script>";
		}
			//echo $checkout->getIdCode($_SESSION['code']);die;

	}
	public function payment()
	{
		$db=new Menu();
		$data= $db->getMenu();
		$this->load->view('payment',array('data'=>$data));
			if (isset($_POST['submit'])) {
				// echo $_POST['email'];die(11);
				$this->sendMail($_POST['email'],$_SESSION['cart'],$_SESSION['code']);
				$last_id=$this->checkout->getIdCode($_SESSION['code']);
				$this->checkout->orderdetails($_SESSION['cart'],$last_id);
				$this->product->updateProduct($_SESSION['cart']);
				session_destroy();
				echo "<script>alert('Thanh toán thành công! Chúng tôi sẽ gửi email cho bạn những thông tin cần');window.location='".BASE_URL."/frontend/contact/'</script>";
			}
	}
}
?>