<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mycontroller extends CI_Controller {


	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/content');
		$this->load->view('frontend/footer');
	}
}
