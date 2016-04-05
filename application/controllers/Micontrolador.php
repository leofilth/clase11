<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiControlador extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->layout->setLayout('template');
	}
	public function index()
	{
		$this->layout->view('vista_index');
	}

}