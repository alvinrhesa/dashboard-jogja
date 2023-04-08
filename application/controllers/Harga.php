<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('harga');
	}

	public function SendMail()
	{
		$from_email = $this->input->post('email'); 
         $to_email = "marketing@digito.id"; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email); 
         $this->email->to($to_email, 'Your Name');
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('harga'); 
	}
}
