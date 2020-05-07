<?php



class Biodata_user extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_biodata');
		 if($this->session->userdata('status') != "login"){
		 	redirect(base_url("login_user"));
		 }
	}
	
	public function index()
	{
		
		$where= $this->session->userdata('id_user');
		$data['user']=$this->M_biodata->getall($where);
		$this->load->view('user/biodata_user',$data);
	}
	

}
