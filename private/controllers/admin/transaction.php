<?php 
class Transaction extends Controller
{
	public $model;
	public function __construct()
	{
		parent::__construct();
		$this->model=new M_ortransaction();		
	}
	public function index()
	{
		$result=$this->model->getListTransaction();
		$this->load->view('transaction',array('result'=>$result));
		if (isset($_GET['action'])) {
			$action=$_GET['action'];
			$id=$_GET['id'];
			switch ($action) {
				case 0:
				$this->model->Update('ortransaction','Id',$id,1);
				$this->model->Update('orderdetail','ortransaction_id',$id,1);
				break;
				case 1:
				$this->model->Update('ortransaction','Id',$id,2);
				$this->model->Update('orderdetail','ortransaction_id',$id,1);
				break;

				default:
				header('location:http://localhost/web/admin/transaction/index');
				break;
			}
		}
	}
	public function detail($id)
	{
		$transaction=$this->model->getOrderdetail($id);
		$this->load->view('detail',array('transaction'=>$transaction));
	}
}

?>