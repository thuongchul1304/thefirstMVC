<?php 
class Shop extends Controller
{
	public $model;
	public function __construct()
	{
		parent::__construct();
		$this->model=new Product();
	}
	public function index()
	{
		$db=new Menu();
		$data= $db->getMenu();
		$group=$this->model->getList('grproduct','');
		if (isset($_GET['type'])) {
			$type=$_GET['type'];
			switch ($type) {
				case 'men':
				$result=$this->model->getListBySex(1,'sex');
				break;
				case 'women':
				$result=$this->model->getListBySex(2,'sex');
				break;
				case 'nike':
				$result=$this->model->getListBySex(1,'GroupProduct_It');	
				break;
				case 'adidas':
				$result=$this->model->getListBySex(2,'GroupProduct_It');
				break;
				case 'converse':
				$result=$this->model->getListBySex(3,'GroupProduct_It');
				break;
				case 'jordan':
				$result=$this->model->getListBySex(4,'GroupProduct_It');
				break;
				case 'price1':
				$result=$this->model->getList('product','WHERE Price > 100 AND Price < 500');
				break;
				case 'price2':
				$result=$this->model->getList('product','WHERE Price > 500 AND Price < 1000');
				break;
				case 'price3':
				$result=$this->model->getList('product','WHERE Price > 1000 AND Price < 1500');
				break;
				case 'price4':
				$result=$this->model->getList('product','WHERE Price > 1500 AND Price < 2000');
				break;
				case 'price5':
				$result=$this->model->getList('product','WHERE Price > 2000');
				break;
				default:
				$result=$this->model->getList('product','');
				break;
			}
		}else{
			$result=$this->model->getList('product','');
		}
		$special=$this->model->specialPrd(5);
		$this->load->view('shop',array('data'=>$data,'result'=>$result,'special'=>$special,'group'=>$group));
	}
	public function single($id)
	{	
		$db=new Menu();
		$result=$this->model->getOne($id);
		$special=$this->model->specialPrd(4);
		$image=$this->model->getImage($id);
		$data= $db->getMenu();
		$this->load->view('details',array('result'=>$result,'image'=>$image,'special'=>$special,'data'=>$data));
	}
}

?>