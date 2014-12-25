<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cameras extends CI_Controller {

	public function index()
	{
		$this->load->view('template/top');
		$this->load->view('cameras/grid');
		$this->load->view('template/bottom');

	}
}
