<?php

/* 
 * This site is developed and maintained by DigitalFrame
 * E-mail: digitalframe01@outlook.com
 */
class Users extends CI_Controller
{

	function register()
	{
		
		if($_POST) {

			$config = array(
				array(
					'field' => 'first_name',
					'label' => 'First Name',
					'rules' => 'trim|required'  
				),
				array(
					'field' => 'last_name',
					'label' => 'Last Name',
					'rules' => 'trim|required'  
				),
				array(
					'field' => 'company_name',
					'label' => 'Company Name',
					'rules' => 'trim'  
				),
				array(
					'field' => 'address_1',
					'label' => 'Address 1',
					'rules' => 'trim|required'  
				),
				array(
					'field' => 'address_2',
					'label' => 'Address 2',
					'rules' => 'trim' 
				),
				array(
					'field' => 'user_name',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|is_unique[csdk275_user_registration.user_name]'  
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required|min_length[5]'//|maxlength[15]  
				),
				array(
					'field' => 'passwordc',
					'label' => 'Confirm Password',
					'rules' => 'trim|required|min_length[5]|matches[password]'  
				),
                                array(
					'field' => 'zip_code',
					'label' => 'Zip Code',
					'rules' => 'trim'  
				),
                                array(
					'field' => 'city',
					'label' => 'city',
					'rules' => 'trim'  
				),
                                array(
					'field' => 'fax',
					'label' => 'fax',
					'rules' => 'trim'  
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|is_unique[csdk275_user_registration.email]|valid_email'  
				)

			);
			// Load form validation library
			$this->load->library('form_validation');
			$this->form_validation->set_rules($config);
			//if there are errors
			if ($this->form_validation->run() == FALSE){
				$data['errors'] = validation_errors();
			} else {

				$data = array(
					'first_name'	=>	$_POST['first_name'],
					'last_name'	=>	$_POST['last_name'],
					'company_name'	=>	$_POST['company_name'],
					'display_name'	=>	$_POST['display_name'],
					'address_1'	=>	$_POST['address_1'],
					'address_2'	=>	$_POST['address_2'],
					'user_name'	=>	$_POST['user_name'],
					'password'	=>	sha1($_POST['password']),
					'phone'         =>	$_POST['phone'],
					'fax'           =>	$_POST['fax'],
					'zip_code'	=>	$_POST['zip_code'],
					'user_reg_date'	=>	$_POST['user_reg_date'],
					'user_type'	=>	$_POST['user_type'],
					'city'          =>	$_POST['city'],
					'email'		=>	$_POST['email']

				);

				$this->load->model('user_register');
				$user_id = $this->user_register->create_user($data);
				$this->session->set_userdata('user_registration_id', $user_id);
				redirect(base_url().'users/register');
			}
		}

		// else
		
		$this->load->helper('form');
		$this->load->view('register_user');

	}
}
