<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Currency extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _currency_output($output = null)
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
			$crud->set_table('exchange_rate');
			$crud->columns('currency_name','buy_rate','sell_rate','rate_date');
			$crud->order_by('rate_id','asc');
			$crud->unset_print();
			//$crud->unset_delete();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_currency_output($output);
		}
	}


}