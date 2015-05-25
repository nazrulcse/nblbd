<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _News_events_output($output = null)
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
			$crud->set_table('news_and_events');
			$crud->columns('news_id','news_date','news_title','news_detail');
			$crud->order_by('news_id','desc');
			$crud->unset_print();
			//$crud->unset_delete();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_News_events_output($output);
		}
	}


}