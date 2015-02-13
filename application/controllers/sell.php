<?php

/*
 * This site is developed and maintained by DigitalFrame
 * E-mail: digitalframe01@outlook.com
 */

class Sell extends CI_Controller {

    function category() {
        $this->load->view('category_post');
    }

    function post() {
        if ($_POST) {

            $config = array(
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
            if ($this->form_validation->run() == FALSE) {
                $data['errors'] = validation_errors();
            } else {

                $data = array(
                    'city' => $_POST['city'],
                    'email' => $_POST['email']
                );

                $this->load->model('product_post');
                $prduct_id = $this->product_post->create_post($data);
                //$this->session->set_userdata('product_id', $product_id);
                redirect(base_url() . 'sell/post');
            }
        }

        // else

        $this->load->helper('form');
        $this->load->view('post_product');
    }

}
