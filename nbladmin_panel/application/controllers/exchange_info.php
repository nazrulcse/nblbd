<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exchange_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Exchange_info_output($output = null)
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
			$crud->set_table('exchange_house_own');
           $crud->columns('ex_code','ex_name','ex_address','ex_country','ex_web','ex_phone','ex_email');
          $crud->display_as('ex_code','Code')->display_as('ex_name','Hosue Name')->display_as('ex_country','Country');
	  $crud->display_as('ex_address','Address')->display_as('ex_web','Website')->display_as('ex_phone','Phone');	
	  $crud->display_as('ex_email','Email')	;
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Exchange_info_output($output);
		}
	}


}