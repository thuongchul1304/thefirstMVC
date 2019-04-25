<?php 
 	class Error404 extends Controller
 	{
 		
 		public function __construct()
 		{
 			parent::__construct();
 		}
 		public function index()
 		{
 			$db=new Menu();
 			$data= $db->getMenu();
 			$this->load->view('error404',array('data'=>$data));
 		}
 	}
 ?>