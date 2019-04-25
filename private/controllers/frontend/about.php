<?php 
 	class About extends Controller
 	{
 		
 		public function __construct()
 		{
 			parent::__construct();
 		}
 		public function index()
 		{
 			$db=new Menu();
 			$data= $db->getMenu();
 			$this->load->view('about',array('data'=>$data));
 		}
 	}
 ?>