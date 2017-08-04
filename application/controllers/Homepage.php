<?php
class Homepage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->helper(array('url','text'));
	}

	public function formlogin()
	{
		$this->load->view('login');
	}

	public function index()
	{
		$this->template->homepage('content/homepage/homepage');
	}

	public function unikproject()
	{
		$this->template->homepage('content/homepage/unikproject');
	}

	public function contactus()
	{
		$this->template->homepage('content/homepage/contactus');
	}

	public function tour()
	{
		$this->template->homepage('content/homepage/tour');
	}

	public function culture()
	{

		$this->template->homepage('content/homepage/culture');
	}

	public function member()
	{

		$this->template->homepage('content/homepage/member');
	}
}