<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->default_template = 'template';
        }
	public function index()
	{
		$data['page'] = 'dashboard';
		$this->load->view($this->default_template, $data);
	}
	
}
