<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  login.php
//  Login Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */