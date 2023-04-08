<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singleblog extends CI_Controller {
	public function index()
	{
		$this->load->view('single_blog');
	}
	public function blog()
	{
		$this->load->view('blog2');
	}
	public function blog3()
	{
		$this->load->view('blog3');
	}
	public function blog4()
	{
		$this->load->view('blog4');
	}
	public function blog5()
	{
		$this->load->view('blog5');
	}
}
