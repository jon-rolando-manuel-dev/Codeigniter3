<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function index()
	{
		$this->load->view('login_template/header');
		$this->load->view('user/register');
		$this->load->view('templates/footer');
	}

}
