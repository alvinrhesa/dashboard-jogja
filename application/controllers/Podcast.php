<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcast extends CI_Controller {
	public function index()
	{
		$this->load->view('p_vpodcast');
	}
}
