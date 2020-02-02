<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('template/top');
		$this->load->view('home');
		$this->load->view('template/bottom');
	}

}
