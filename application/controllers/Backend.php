<?php
class Backend extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->helper(array('url','text'));
	}

	public function index()
	{
		$this->template->backend('content/backend/dashboard');
	}

	public function member()
	{
		$this->template->backend('content/backend/member');
	}

	public function tour()
	{
		$this->template->backend('content/backend/tour');
	}

	public function culture()
	{
		$this->template->backend('content/backend/culture');
	}
}
?>