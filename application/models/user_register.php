<?php

/* 
 * This site is developed and maintained by DigitalFrame
 * E-mail: digitalframe01@outlook.com
 */

class User_register extends CI_Model
{
	function create_user($data)
	{
		$this->db->insert('csdk275_user_registration', $data);
		
	}

	function login($username, $password)
	{
		$where = array(
			'user_name'	=>	$username,
			'password'	=>	sha1($password) //$password,
		);

		$this->db->select()->from('csdk275_user_registration')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}
