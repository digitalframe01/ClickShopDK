<?php 

class Users extends CI_Controller
{

	function register()
	{
		
		if($_POST) {

			$config = array(
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[3]|is_unique[ci_users.username]'  
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
					'field' => 'usertype', // or is it user_type
					'label' => 'User Type',
					'rules' => 'required'  
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|is_unique[ci_users.email]|valid_email'  
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
					'username'	=>	$_POST['username'],
					'password'	=>	sha1($_POST['password']),
					'user_type'	=>	$_POST['usertype'],
					'email'		=>	$_POST['email']

				);

				$this->load->model('user');
				$user_id = $this->user->create_user($data);
				$this->session->set_userdata('user_id', $user_id);
				$this->session->set_userdata('user_type', $_POST['user_type']);
				redirect(base_url().'posts');
			}
		}

		// else
		
		$this->load->helper('form');
		$this->load->view('register_user');

	}
}
 ?>