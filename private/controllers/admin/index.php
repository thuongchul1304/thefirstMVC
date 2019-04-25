<?php 
class Index extends Controller
{
	public $model;
	public function __construct()
	{
		if (!isset($_COOKIE['username'])) {
			echo "<script>window.location='".BASE_URL."/frontend/register/index'</script>";
		}
		parent::__construct();
		$this->model=new Product();
		
	}
	public function index()
	{
		$result=$this->model->getList('product','');
		$this->load->view('index',array('result'=>$result));
	}
	public function del($id)
	{
		$this->model->delProduct($id);
		echo "<script>alert('Xóa thành công!');window.location='".BASE_URL."/admin/index/index'</script>";
	}
	public function edit($id)
	{
		$edit=$this->model->getOne($id);
		$this->load->view('edit',array('edit'=>$edit));
		if (isset($_POST['edit'])) {
			if ($_FILES['Image']['type']=='image/png' || $_FILES['Image']['type'] == 'image/jpeg' || $_FILES['Image']['type'] == 'image/jpg') {
				move_uploaded_file($_FILES['Image']['tmp_name'],'public/images/shoes/'.$_FILES['Image']['name']);
				move_uploaded_file($_FILES['Image1']['tmp_name'],'public/images/shoes/'.$_FILES['Image1']['name']);
				move_uploaded_file($_FILES['Image2']['tmp_name'],'public/images/shoes/'.$_FILES['Image2']['name']);
				$hinh=$_FILES['Image']['name'];
				$hinh1=$_FILES['Image1']['name'];
				$hinh2=$_FILES['Image2']['name'];
				$Name=$_POST['name'];
				$Detail=$_POST['detail'];
				$Price=$_POST['price'];
				$Image=$hinh;
				$Image1=$hinh1;
				$Image2=$hinh2;
				$PriceNew=$_POST['pricenew'];
				$Date=date ("Y-m-d H:i:s");
				$Quantity=$_POST['quantity'];
				$GroupProduct_It=$_POST['grproduct'];
				$this->model->update($id,$Name,$Detail,$Price,$Image,$PriceNew,$Date,$Quantity,$GroupProduct_It);
				$this->model->updateSlide($id,$Image,$Image1,$Image2);
				echo "<script>alert('Sửa thành công!');window.location='".BASE_URL."/admin/index/index'</script>";
			}else{
				echo "<h2 style='color:red;font-weight:bold;text-align:center'>Sai định dạng ảnh</h2>";
			}
		}
	}
	public function add()
	{
		$this->load->view('add');
		if (isset($_POST['add'])) {
			if ($_FILES['Image']['type']=='image/png' || $_FILES['Image']['type'] == 'image/jpeg' || $_FILES['Image']['type'] == 'image/jpg') {
				move_uploaded_file($_FILES['Image']['tmp_name'],'public/images/shoes/'.$_FILES['Image']['name']);
				move_uploaded_file($_FILES['Image1']['tmp_name'],'public/images/shoes/'.$_FILES['Image1']['name']);
				move_uploaded_file($_FILES['Image2']['tmp_name'],'public/images/shoes/'.$_FILES['Image2']['name']);
				$hinh=$_FILES['Image']['name'];
				$hinh1=$_FILES['Image1']['name'];
				$hinh2=$_FILES['Image2']['name'];
				$Name=$_POST['name'];
				$Detail=$_POST['detail'];
				$Price=$_POST['price'];
				$sex=$_POST['sex'];
				$Image=$hinh;
				$Image1=$hinh1;
				$Image2=$hinh2;
				$PriceNew=$_POST['pricenew'];
				$Date=date ("Y-m-d H:i:s");
				$Quantity=$_POST['quantity'];
				$GroupProduct_It=$_POST['grproduct'];
				$this->model->addSlide($Image,$Image1,$Image2);
				$this->model->addpro($Name,$Detail,$Price,$Image,$PriceNew,$Date,$sex,$Quantity,$GroupProduct_It);
				echo "<script>alert('Thêm thành công!');window.location='".BASE_URL."/admin/index/index'</script>";
			}else{
				echo "<h2 style='color:red;font-weight:bold;text-align:center'>Sai định dạng ảnh</h2>";
			}
		}
	}
	public function create()
	{
		$this->load->view('create');
		if (isset($_POST['create'])) {
			$name=$_POST['name'];
			$quantity=$_POST['quantity'];
			$unitprice=$_POST['unitprice'];
			$producedDate=$_POST['producedDate'];
			$desciption=$_POST['desciption'];
				//print_r($_POST);
				//$Date=date ("Y-m-d H:i:s");
			$this->model->create($name, $quantity, $unitprice, $producedDate, $desciption);
			echo "<script>alert('Thêm thành công!');window.location='".BASE_URL."/admin/index/list'</script>";
		}
	}
	public function list()
	{
		$result=$this->model->getList('sparepart','');
		$this->load->view('list-spare',array('result'=>$result));
		if (isset($_POST['search'])) {
			$data=$this->model->search($_POST['datasearch']);
			echo "        <table class='table table-striped'>
			<thead>
			<tr>
			<th>Tên</th>
			<th>Giá  </th>
			<th>Số lượng</th>
			<th>Ngày</th>
			<th>Miêu tả</th>
			</tr>
			</thead>";
			echo "<tbody>";
			foreach ($data as $key => $value) {
				echo "<tr>";
				echo "<th>".$value['name']."</th>";
				echo "<th>".$value['quantity']."</th>";
				echo "<th>".$value['unitprice']."</th>";
				echo "<th>".$value['producedDate']."</th>";
				echo "<th>".$value['desciption']."</th>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		}
	}
}

?>