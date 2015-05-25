<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
	}

	public function _Photo_gallery_output($output = null)
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
			$crud->set_table('photogallary');
			$this->config->set_item('grocery_crud_file_upload_allow_file_types','gif|jpeg|jpg|png');
			$crud->columns('pgallery_id','pgallery_heading','pgallery_imgurl','pgallery_press');
			$crud->set_field_upload('pgallery_imgurl','assets/img/photo/');
			//$crud->callback_after_upload(array($this,'Photo_gallery_callback_after_upload'));
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$output = $crud->render();
			$this->_Photo_gallery_output($output);
		}
	}
	/*function Photo_gallery_callback_after_upload($uploader_response,$field_info, $files_to_upload)
	{
	    $this->load->library('image_moo');
	 
	    //Is only one file uploaded so it ok to use it with $uploader_response[0].
	    $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
	 
	    $this->image_moo->load($file_uploaded)->resize(300,300)->allow_scale_up(true)->save($file_uploaded,true);
	 
	    return true;
	}*/


}