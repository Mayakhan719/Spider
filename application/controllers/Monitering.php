<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitering extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if (is_logged_in()) {
			$data['page_name'] = 'Monitering';
			$data['title'] = AppName;
			$this->load->view('monitering', $data);
		} else {
			redirect('/');
		}
	}
}
