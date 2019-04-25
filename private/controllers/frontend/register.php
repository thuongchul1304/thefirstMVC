<?php 
class Register extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$db=new __Register();
		$this->load->view('register');
		if (isset($_POST['register'])) {
			$name=$_POST['full_name'];
			$Username=$_POST['Username'];
			$email=$_POST['your_email'];
			$password=$_POST['password'];
			$Role=2;
			$Created=date ("Y-m-d H:i:s");
			$confirmpass=$_POST['comfirm_password'];
			$user=$db->checkUser($Username);
			//print_r($db->checkUser($Username));die;	
			if ($Username==$user['Username']) {
				echo "<script>alert('Tài khoản đã được đăng ký');window.location='".BASE_URL."/frontend/register/index'</script>";
			}elseif ($password!=$confirmpass) {
				echo "<script>alert('Mật khẩu không trùng nhau!');</script>";
			}else{
				$password=md5($password);
				$db->register($name, $Username, $email, $password, $Role, $Created);
				echo "<script>alert('Đăng ký thành công');window.location='".BASE_URL."/frontend/register/index'</script>";
			}
		}
	}
	public function login()
	{
		$username=$_POST['Username'];
		$db=new __Register();
		$as=$db->checkUser($username);
		if (isset($_POST['login'])) {
			$password=md5($_POST['password_1']);
			$pass=$as['Password'];
			if ($password==$pass) {
				setcookie('username',$username, time() + 3600,'/');
				echo "<script>alert('Đăng nhập thành công');window.location='".BASE_URL."/admin/index/index'</script>";
			}else{
				echo "<script>alert('Đăng nhập thất bại');window.location='".BASE_URL."/frontend/register/index'</script>";
			}
		}
	}
	public function logout()
	{
		setcookie("username", "username", time() - 7200,'/');
		echo "<script>alert('Đăng xuất thành công');window.location='".BASE_URL."/frontend/index/index'</script>";
	}
}
?>