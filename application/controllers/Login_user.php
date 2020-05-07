<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login_user');
 
	}

	public function index()
	{
		
		$this->load->view('user/login');
	}
	function aksi(){

		$this->load->model('m_login_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,
			);
		$cek = $this->m_login_user->cek_login("tb_user",$where)->num_rows();
		if($cek > 0){
 
				$data_session = array(
				'nama' => $username,
				'status' => "login",
				'id_user'=>$cek['id_user'],
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard/user"));
 
		}else{
			redirect(base_url("login_user"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
	redirect(base_url('login_user'));
	}
}
