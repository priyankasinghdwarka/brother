<?php
class Welcome_model extends CI_Model{

	function get_all_menu(){
		$this->db->where('DeptType','Products');
		$this->db->where('published_state','yes');
		$this->db->order_by("DisplayOrder","asc");
		$this->db->where('DeptTemplateSet','item_display');
		return $this->db->get('departments')->result();
	}
	function get_dept_categories($id){
       $this->db->where('DeptID', $id);
       $this->db->where('published_state','yes');
       $this->db->where('CatTemplateSet !=','advanced_search_size');
       $this->db->where('CatTemplateSet !=','advanced_search');
       $this->db->where('CatTemplateSet !=','advanced_search');
       $this->db->where('crm_royalties !=','yes');
       $this->db->order_by("DisplayOrder","asc");
       return $this->db->get('categories')->result(); 
   }
   function get_license($id){
       $this->db->where('DeptID', $id);
       $this->db->where('published_state','yes');
       $this->db->where('isHeader','x');
       $this->db->order_by("DisplayOrder","asc");
       return $this->db->get('categories')->result(); 
   }
     function get_side_mega_menu($id){
       $this->db->where('DeptID', $id);
       $this->db->where('published_state','yes');
       $this->db->where('IncludeOverview','x');
       $this->db->order_by("DisplayOrder","asc");
       return $this->db->get('categories')->result(); 
   }
<<<<<<< HEAD
 /*===faq list===*/
    function get_faq(){
       return $this->db->get('tbl_faq')->result(); 
   }
    function get_about(){
       return $this->db->get('wiki')->result(); 
   }
    function add_newletter($data){
       $this->db->insert('newsletter',$data); 
   }



   
}
=======


   
}
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
