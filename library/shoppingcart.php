<?php 
require '../private/models/database.php';
require '../private/models/product.php';
$db=new Product;
session_start();
// lấy id sản phẩm/
if (isset($_POST['id'])) {
	$id=isset($_POST['id']) ? (int)$_POST['id'] : '';
	$product=$db->getOne($id);
	if ($product) {
// kiểm tra tồn tại SS['cart']
		if (isset($_SESSION['cart'])) {
 	// đã tồn tại

			if (isset($_SESSION['cart'][$id])) 
			{
				$_SESSION['cart'][$id]['qty']+=1;
			}
			else
			{
				$_SESSION['cart'][$id]['qty']=1;
			}
			$_SESSION['cart'][$id]['Id']=$product['Id'];
			$_SESSION['cart'][$id]['Name']=$product['Name'];
			$_SESSION['cart'][$id]['Price']=$product['PriceNew'];
			$_SESSION['cart'][$id]['Image']=$product['Image'];
			$_SESSION['cart'][$id]['Detail']=$product['Detail'];
			$_SESSION['tongtien']=0;
			foreach ($_SESSION['cart'] as $key => $value) {
				$_SESSION['tongtien']+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty'];
			}
			echo json_encode($_SESSION['cart']);
			
		}
		else
		{

			$_SESSION['cart'][$id]['qty']=1;
			$_SESSION['cart'][$id]['Id']=$product['Id'];
			$_SESSION['cart'][$id]['Name']=$product['Name'];
			$_SESSION['cart'][$id]['Price']=$product['PriceNew'];
			$_SESSION['cart'][$id]['Image']=$product['Image'];
			$_SESSION['cart'][$id]['Detail']=$product['Detail'];
			$_SESSION['tongtien']=0;
			foreach ($_SESSION['cart'] as $key => $value) {
				$_SESSION['tongtien']+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty'];
			}
			echo json_encode($_SESSION['cart']);
			
		}
	}
	else
	{
		$_SESSION['success']='Không tồn tại sản phẩm này!!!';	
 	// header('location:index.php');
 	// exit();
	}
}
if (isset($_POST['id_del'])) {
	if (!empty($_SESSION['cart'])) {
		unset($_SESSION['cart'][$_POST['id_del']]);
		//echo json_encode($_SESSION['cart']);
	}else{
		unset($_SESSION['cart']);
		//echo json_encode($_SESSION['cart']);
	}
	echo json_encode($_SESSION['cart']);
}
if (isset($_POST['id_up'])) {
	$_SESSION['cart'][$_POST['id_up']]['qty']+=1;
	$_SESSION['tongtien']=0;
	foreach ($_SESSION['cart'] as $key => $value) {
		$_SESSION['tongtien']+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty'];
	}
	echo json_encode($_SESSION['cart']);
}
if (isset($_POST['id_down'])) {
	$_SESSION['cart'][$_POST['id_down']]['qty']-=1;
	$_SESSION['tongtien']=0;
	foreach ($_SESSION['cart'] as $key => $value) {
		$_SESSION['tongtien']+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty'];
	}
	echo json_encode($_SESSION['cart']);
	
}
?>
