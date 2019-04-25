<?php 

class View 
{
	
	public function view($fileName=false,$params=array())
	{
		$forder=$_GET['r'];
		$forder=explode('/',$forder);
		//echo $forder[0];
		if ($forder[0]=='admin') {
			$rr='admin';
		}else{
			$rr='frontend';
		}
		//echo $rr;
		if (!empty($params))
		extract($params);
		$fileName='private/views/'.$rr.'/'.$fileName.'.php';
		if (file_exists($fileName)) {
			include $fileName;
		}
	}
}