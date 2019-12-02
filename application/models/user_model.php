<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{



	public function register($username, $password)
	{
		$this->db->insert('users', array(
			'username' => $username,
			'password' => $password
		));
	}

	public function login($username, $password)
	{

	}

	public function logout()
	{

	}

}
