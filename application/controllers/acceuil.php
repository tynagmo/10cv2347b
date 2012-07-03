<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['pseudo'] = 'Arthur';
		$data['email'] = 'email@ndd.fr';
		$data['en_ligne'] = true;
		
		
		$this->load->view('include/header.html');
		$this->load->view('index.html',$data);
		$this->load->view('include/footer.html');
	}
	
}

/* End of file acceuil.php */
/* Location: ./application/controllers/accueil.php */