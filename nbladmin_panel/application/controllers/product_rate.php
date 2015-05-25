<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_rate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Product_rate_output($output = null)
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
			$crud->set_table('product_interest');
			$crud->columns('product_id','product_category','product_type','interset_rate','last_change_date','product_desc');
			$crud->field_type('product_type','dropdown', array('1' => 'Deposit Line', '2' => 'Credit Line'));
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Product_rate_output($output);
		}
	}


}