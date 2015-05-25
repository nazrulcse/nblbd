<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menumgmt extends CI_Controller {

	function __construct(){
	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
	
	
	}
	
	public function index(){
	
		$ses_id=$this->session->userdata('session_id');
	    	if ($this->session->userdata('ses_id')!=$ses_id)
	    	{
	        	redirect('adminlogin'); 
	    	}
		else 
		{
			$data['message'] = '';
			$this->load->view('show_menu', $data);
		}
	
	}

}