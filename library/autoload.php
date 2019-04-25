	<?php 
	include 'controller.php';
	include 'view.php';
	include 'private/models/database.php';
	include 'private/models/menu.php';
	include 'private/models/product.php';
	include 'private/models/register.php';
	include 'private/models/checkout.php';
	include 'private/models/transaction.php';
	class Autoload 	
	{	
		public function __construct()
		{
			
			$url=isset($_GET['r']) ? $_GET['r'] : null;
			$url=explode('/',$url);
			if ($url[0]) 
			{
				if (empty($url[1])) {

					$fileName='private/controllers/'.$url[0].'/index.php';
					$url[1]='index';

				}else{
					$fileName='private/controllers/'.$url[0].'/'.$url[1].'.php';
				}
				if (file_exists($fileName)) 
				{

					include $fileName;
					$className=ucfirst($url[1]);
					$obj=new $className;
				}

			}
			// else
			// {
			// 	include 'private/controllers/default.php';
			// 	$defaultObj= new DefaultC();
			// 	call_user_func(array($defaultObj,'index'));
			// }	
			if (isset($url[3])) 
			{
				if (method_exists($obj,$url[2])) 
				{

					call_user_func(array($obj,$url[2]),$url[3]);
					//$obj->{$url[1]}($url[2]);
				}
			}else
			{
				if (isset($url[2])) 
				{
					if (empty($url[2])) {
						header('location:http://localhost/web/'.$url[0].'/'.$url[1].'/index');
					}else{
						if (isset($obj) && method_exists($obj,$url[2]) ) 
						{
							call_user_func(array($obj,$url[2]));
						}else
						{
							header('location:http://localhost/web/frontend/error404/');
						}
					}
					//$obj->{$url[1]}('/index');
				}else{
					if ($url[0]=='admin') {
						header('location:http://localhost/web/admin/'.$url[1].'/index');
					}else{
						header('location:http://localhost/web/frontend/'.$url[1].'/index');
					}
				}
			}
		}
	}
	$autoload=new Autoload();
	?>