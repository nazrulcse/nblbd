<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Board_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Board_info_output($output = null)
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
			$crud->set_table('board');
          $crud->columns('board_sl','board_name','designation','pos_index','active','image');
          $crud->display_as('board_name','Name of Director')->display_as('designation','Offcial Designation');
          $crud->display_as('pos_index','Position Index');
          $crud->field_type('active','dropdown', array('1' => 'Active','2' => 'Inactive'));
           $crud->field_type('designation','dropdown', array('Director' => 'Director','Chairman' => 'Chairman','Independent Director' => 'Independent Director','Managing Director' => 'Managing Director','Managing Director(CC)' => 'Managing Director(CC)'));
          $this->config->set_item('grocery_crud_file_upload_allow_file_types','gif|jpeg|jpg|png');
          $crud->set_field_upload('image','assets/img/director/');
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Board_info_output($output);
		}
	}


}