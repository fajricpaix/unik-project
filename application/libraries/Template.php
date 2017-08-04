<?php

class Template
{
	protected $_ci;

	function __construct()
	{
		$this->_ci = &get_instance();
	}
	
	function homepage($content,$data=null){
		$data['header'] = $this->_ci->load->view('layout/homepage/header',$data,true);
		$data['footer'] = $this->_ci->load->view('layout/homepage/footer',$data,true);
		$data['content'] = $this->_ci->load->view($content,$data,true);
		$this->_ci->load->view('homepage.php',$data);
	}

	function backend($admin,$data=null){
		$data['header'] = $this->_ci->load->view('layout/backend/header',$data,true);
		$data['sidebar'] = $this->_ci->load->view('layout/backend/sidebar',$data,true);
		$data['footer'] = $this->_ci->load->view('layout/backend/footer',$data,true);
		$data['content'] = $this->_ci->load->view($admin,$data,true);
		$this->_ci->load->view('backend.php',$data);
	}

}