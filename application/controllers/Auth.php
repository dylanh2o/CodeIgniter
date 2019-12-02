<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[32]|trim');
		if ($this->form_validation->run() === FALSE) {
			echo json_encode(array('type' => 'error'));
		} else {
			$username = $this->input->post('username');
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$this->user_model->register($username, $password);
			echo json_encode(array('type' => 'success'));
		}
	}
}
