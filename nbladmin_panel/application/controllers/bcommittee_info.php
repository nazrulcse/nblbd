<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BCommittee_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _BCommittee_info_output($output = null)
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
			$crud->set_table('committee');
			$crud->where('comm_id','1');
			$crud->or_where('comm_id','2');
			$crud->or_where('comm_id','5');

           $crud->columns('comm_id','mem_name','designation','pos_index','com_desig');
          $crud->display_as('comm_id','Committee Name')->display_as('mem_name','Member Name')->display_as('designation','Offcial Designation');
          $crud->display_as('pos_index','Position Index');
          $crud->display_as('com_desig','Committee Desig.');
          $crud->field_type('comm_id','dropdown', array('1' => 'Executive Committee','2' => 'Audit Committee','5'=>'Risk Management Committee'));
          $crud->field_type('com_desig','dropdown', array('Member' => 'Member','Chairperson' => 'Chairperson'));
          $crud->field_type('designation','dropdown', array('Director' => 'Director','Independent Director' => 'Independent Director','Managing Director' => 'Managing Director'));

			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_BCommittee_info_output($output);
		}
	}


}