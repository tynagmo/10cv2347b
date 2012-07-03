<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		redirect(array('error', 'probleme'));
	}
	public function accueil()
	{
		//	On inclut la vue ./application/views/test/accueil.php
		$this->load->view('test/accueil.php');
	}
}

?>