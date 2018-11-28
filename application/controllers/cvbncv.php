function edit_details_old()
	{
		  $user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			if (isset($_POST['submit'])){

				$this->load->helper(array('form', 'url'));
				$this->load->library('session'); 
				$this->load->library('form_validation');
				$this->form_validation->set_rules('firstname', 'First Name', 'required');
				$this->form_validation->set_rules('lastname', 'Last Name', 'required');
				//$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('address_one', 'Address One', 'required');
				$this->form_validation->set_rules('address_two', 'Address Two', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_rules('state', 'State', 'required');
				$this->form_validation->set_rules('city', 'City', 'required');
				$this->form_validation->set_rules('zip', 'Zip', 'required');
				$this->form_validation->set_rules('taxid', 'Tax Id', 'required');
				$this->form_validation->set_rules('business_type', 'Business Type', 'required');
				$this->form_validation->set_rules('job_description', 'Job Description', 'required');
                  
				    $firstname = $this->input->post('firstname');
				    $lastname =$this->input->post('lastname');
				    $cmpy   = $this->input->post('company');
				    $business_type   = $this->input->post('business_type');
				    $job_description = $this->input->post('job_description');
					$business = implode(';',(array)$business_type);
					$job = implode(';',(array)$job_description);
				   
					if($cmpy=="")
					{
                     $company = $firstname ."".$lastname ; 
					}
					else
					{
					 $company = $this->input->post('company'); 	
					}


            if ($this->form_validation->run() == FALSE) {
            	$id= $this->input->post('country');
            	$country = $this ->Front_model->fetch_country_name($id);
            	$country_code = $this ->Front_model->fetch_country_code($id);
            	//print_R($country_code);die;
               $data_array = array(
		            	'firstname' =>$firstname,
		            	'lastname' => $lastname,
		            	'name' =>$this->input->post('name'),
		            	'address_one' =>$this->input->post('address_one'),
		            	'address_two' =>$this->input->post('address_two'),
		            	'country' =>$country,
		            	'state' =>$country_code,
		            	'city' =>$this->input->post('city'),
		            	'zip' =>$this->input->post('zip'),
		            	'notes' =>$this->input->post('taxid'),
		            	'business_type' => $business,
		            	'job_description' => $job,
		            	'crm_dept' => $company
		            	
		            	
		             );
                    
		            $this->user_model->add_details($data_array); 
		          
		            $this->session->set_flashdata('message','Account Details Added Successfully!');
		            redirect('user/edit_details');	
		        } 
		    }
              $data['country'] = $this ->Front_model->fetch_country();
		      $this->load->view('front/user/edit-details',$data);
	}