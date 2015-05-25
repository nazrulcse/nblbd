<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Branch_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Branch_info_output($output = null)
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
			$crud->set_table('branchinfo');
 $crud->columns('branch_code','division','branch_name','phone','fax','district','email','swift','incharge','address','adbranch','online','telex','egp','branch_type');
			$crud->field_type('division','dropdown', array('Barisal' => 'Barisal','Chittagong' => 'Chittagong','Dhaka' => 'Dhaka','Khulna' => 'Khulna','Rajshahi' => 'Rajshahi','Rangpur' => 'Rangpur','Sylhet'=>'Sylhet' ));
			$crud->field_type('adbranch','dropdown', array('0' => 'Non AD Branch','1' => 'AD Branch'));
			$crud->field_type('online','dropdown', array('1' => 'Online Enable','2' => 'Online Disable'));
			$crud->field_type('branch_type','dropdown', array('Branch' => 'Branch','SME Branch' => 'SME Branch'));
$crud->field_type('egp','dropdown', array('1' => 'EGP Enable','0' => 'Non EGP Enable'));
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Branch_info_output($output);
		}
	}


}