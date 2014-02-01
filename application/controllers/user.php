<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$this->load->view('example');
	}

	public function sign_in(){
		
		$mail = $this->input->post('mail');
		$password = $this->encrypt->sha1($this->input->post('password'));

		if($result = $this->user->login($mail, $password)){
			echo 'login possible';
		}
		echo 'failed login';
		//echo $encrypted_string;
		//header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */