<?php 
 	class Index extends Controller
 	{
 		
 		public function __construct()
 		{
 			parent::__construct();
 		}
 		public function index()
 		{
 			$db=new Menu();
 			$data= $db->getMenu();
 			return $this->load->view('index',array('data'=>$data));
 		}
 	}
 ?>