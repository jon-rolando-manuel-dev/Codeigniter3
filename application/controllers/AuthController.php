<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
	{
		// $this->load->view('login_template/header');
		$this->load->view('auth/login');
	}

	public function is_login(){

	}

}
