<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Correspond_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Correspond_info_output($output = null)
	{
		$this->load->view('currency_view.php',$output);
	}

	public function index()
	{
		$ses_id=$this->session->userdata('session_id');
	    	if ($this->session->userdata('ses_id')!=$ses_id)
	    	{
		    redirect('adminlogin'); 
		}
		else
		{
				
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('correspondance_bank');
			 	 	 	 	 	
           $crud->columns('corr_id','corr_country','corr_curr','corr_bank','corr_city','corr_acc_no');
          $crud->display_as('corr_country','Country')->display_as('corr_city','City')->display_as('corr_curr','Currency');        
$crud->display_as('corr_bank','Bank Name');
          $crud->display_as('corr_acc_no','Account Number')->display_as('corr_bank','Bank Name');
         
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Correspond_info_output($output);
		}
	}


}