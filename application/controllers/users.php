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
					'field' => 'username',
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
					'user_name'	=>	$_POST['username'],
					'password'	=>	sha1($_POST['password']),
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
