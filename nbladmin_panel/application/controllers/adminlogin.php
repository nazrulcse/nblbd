<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminLogin extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper('url');
		$this->load->library('session');
		
		// load model
		$this->load->model('Adminlogin_model','',TRUE);
	}
	
	function index()
	{
		// offset
		$data['message'] = '';
		// load view
		$this->load->view('adminlogin', $data);
	}
	
	function matchuser()
	{
		// set common properties
		
		$data['message'] = '';
		$userid=$this->input->post('aname');
		$password=$this->input->post('apasswd');
		
		$config_module=array(
					'admin'=>'menumgmt',
					'currency'=>'currency',
					'newsevents'=>'news_events',
					'interest'=>'product_rate',
					'photo'=>'photo_gallery',
					'branch'=>'branch_info',
					'exchange'=>'exchange_info',
					'committee'=>'committee_info',
					'bcommittee'=>'bcommittee_info',
					'nostro'=>'correspond_info',
					'board'=>'board_info'
				     );
		 $userdetails = $this->Adminlogin_model->get_userdetail($userid);
                 $u_id=$userdetails['user_name'];
                 $pass=$userdetails['password'];
		 $module=$userdetails['module'];
	        
	        if ($u_id==$userid && $pass==$password)    
	        {
	          $ses_id=$this->session->userdata('session_id');
	          $this->session->set_userdata('ses_id',$ses_id);
	          $this->session->set_userdata('u_id',$u_id);
	          $this->session->set_userdata('pass',$pass);
		  redirect($config_module[$module]);  
		 //print_r($config_module);
	        }
	        
	        else
	        {
	          $data['message'] = 'Wrong User or Password';
	          $this->load->view('adminlogin', $data);
	        }
	}
	function changepass()
	{
	     //redirect('changepass'); 
	    $data['message'] = '';
	    $this->load->view('changepass',$data);
	}
	function updatepass()
	{
	   $u_id=$this->session->userdata('u_id');   
	   $pass=$this->session->userdata('pass');   
	   $opass=$this->input->post('oldpass');
	   $npass=$this->input->post('npasswd');
           if($pass==$opass)
           {
                $user=array('password' => $npass);
                $this->Adminlogin_model->update_userdetail($user,$u_id);
                 redirect('adminlogin'); 
           }
	   else
	   {
	   	$data['message'] = 'can not update password';
	        $this->load->view('changepass',$data);
	   }
	   
	}
	function logout()
	{
	   $this->session->sess_destroy();
            redirect('adminlogin');
	}
}
?>