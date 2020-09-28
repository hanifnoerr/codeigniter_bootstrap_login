<?php 
 
class Dashboard extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "AezakmiHesoyamWhosyourdaddy"){
			redirect(base_url("Login"));
		}
	}
 
	function index(){
		$this->load->view('__header');
		if ($this->session->userdata('role') == "administrator") 
		{
			$this->load->view('dashboard_u');
		} else {
			$this->load->view('dashboard_a');
		}
		$this->load->view('__footer');
	}

}