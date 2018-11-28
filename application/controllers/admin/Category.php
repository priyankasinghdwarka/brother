<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('ADMIN_ID');
		$this->load->model('Category_model');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
	}
	
	public function listing()
	{
		$data['result'] = $this->Category_model->get_all_category(); 
		$this->load->view('admin/category/listing',$data);
	}

	public function add()
	{
	if(isset($_POST['submit']))
	{ 
	//print_r($_POST);die;
		$this->form_validation->set_rules('CatTitle', 'Category', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{
			$DeptID  	= $_POST['DeptID'];
			$CatTitle   	= $_POST['CatTitle'];
			$url_slug 		= $_POST['url_slug'];
			$CatShortDesc	= $_POST['CatShortDesc'];
			$CatDescription = $_POST['CatDescription'];
			$root_display 		= $_POST['root_display'];
			$status 		= $_POST['status'];

               $postdata = array (
                     	'DeptID'            => $DeptID,
		                'CatTitle'             => $CatTitle,
		                'url_slug'             => $url_slug,
		                'CatShortDesc'         => $CatShortDesc,
		                'CatDescription'       => $CatDescription,
		                'status'               => $status,
		                'root_display'         => $root_display,
		                'created_date'         => date('Y-m-d h:i:s')
		          );
                 $this->Category_model->save_category($postdata);


		$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
		redirect('admin/category/listing');
		}
			
	}
		$this->load->view('admin/category/add');
	}
	public function edit()
	{
		$args = func_get_args();
<<<<<<< HEAD
=======
		//$data['cat'] = $this->category_model->get_all_category();
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
		$data['result'] = $this->Category_model->get_category_by_id($args[0]);
		$this->form_validation->set_rules('CatTitle', 'Category', 'trim|required');
		if(isset($_POST['submit']))
		{
			if ($this->form_validation->run() == TRUE)
			{
<<<<<<< HEAD
				$DeptID         = $_POST['DeptID'];
				$CatTitle   	= $_POST['CatTitle'];
				$CatShortDesc	= $_POST['CatShortDesc'];
				$CatDescription = $_POST['CatDescription'];
				$HowToOrder     = $_POST['HowToOrder'];
				$published_state= $_POST['published_state'];
				$crm_royalties  = $_POST['crm_royalties'];
				$DisplayOrder  = $_POST['DisplayOrder'];
				
				
                 $postdata = array (
                     	'DeptID'               => $DeptID,
		                'CatTitle'             => $CatTitle,
		                'HowToOrder'           => $HowToOrder,
		                'published_state'      => $published_state,
		                'crm_royalties'        => $crm_royalties,
		                'CatShortDesc'         => $CatShortDesc,
		                'CatDescription'       => $CatDescription,
		                'DisplayOrder'         => $DisplayOrder
		                
=======
				$DeptID  	= $_POST['DeptID'];
				$CatTitle   	= $_POST['CatTitle'];
				$url_slug 		= $_POST['url_slug'];
				$CatShortDesc	= $_POST['CatShortDesc'];
				$CatDescription = $_POST['CatDescription'];
				$root_display 		= $_POST['root_display'];
				$status 		= $_POST['status'];
                 $postdata = array (
                     	'DeptID'            => $DeptID,
		                'CatTitle'             => $CatTitle,
		                'url_slug'             => $url_slug,
		                'CatShortDesc'         => $CatShortDesc,
		                'CatDescription'       => $CatDescription,
		                 'root_display'         => $root_display,
		                'status'               => $status,
		                'created_date'         => date('Y-m-d h:i:s')
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
		          );

                // ECHO "<PRE>";PRINT_r($postdata);DIE;
				$this->Category_model->update_category_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('admin/category/listing');
			}
		
		}
	$data['category'] = $this->Category_model->get_all_category(); 
<<<<<<< HEAD
	$data['department'] = $this->Category_model->get_all_dept();
=======
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
	$this->load->view('admin/category/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$team_data =  $this->Category_model->get_category_by_id($args[0]);
		$this->Category_model->delete_category_by_id($args[0]);
	    $this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/category/listing');
	}
	
	
		
<<<<<<< HEAD
}
=======
}
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
