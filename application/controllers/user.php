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
		$this->load->model('user_model', 'user');
		$this->load->model('skill_model', 'skill');
		$this->load->model('collaborators_model', 'collaborator');
		$this->load->model('project_model', 'project');
		$this->load->library('encrypt');
	}

	public function sign_up()
	{
		$this->load->view('signup');
	}


	public function sign_in(){
		if(!$this->session->userdata('username')){
			$email = $this->input->post('email');
			$password = $this->encrypt->sha1($this->input->post('password'));

			if($result = $this->user->login($email, $password)){
				$isAdmin = ($result->id== 1)? true : false;
				$data = array(
					'id' => $result->id,
					'username'  => $result->username,
					'email'     => $result->email,
					'admin' => $isAdmin
				);
				$this->session->set_userdata($data);
			}
		}
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	public function sign_out(){
		$this->session->sess_destroy();
		header('Location: ' . base_url(''));
	}

	public function profile(){
		if($this->session->userdata('username')){
			$this->showUser($this->session->userdata('username'));
		}else{
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function showUser($aUsername){
		$wUser = $this->user->find_entry('username', $aUsername);
		if(!$wUser){
			show_404();
		}
		$wSkills = $this->skill->find_entries('owner',$wUser['id']);
		$wCollaborators = $this->collaborator->find_collaborators('user_id', $wUser['id']);
		$wProjects = $this->project->find_entry('owner', $wUser['id']);
		if($wCollaborators){
			foreach($wCollaborators as $wCollaborator){
				$wProject = $this->project->find_entry('id', $wCollaborator['project_id']);
				$wProjects[] = $wProject[0];
			}
		}

		$data = array(
			'users' => $wUser,
			'skills' => $wSkills,
			'projects' => $wProjects
			);
			$this->load->view('profile', $data);
	}

	public function new_user(){
		$data["username"] = $this->input->post('name');
		$data["email"] = $this->input->post('email');
		$data["password"] = $this->encrypt->sha1($this->input->post('password'));
		$confpass = $this->encrypt->sha1($this->input->post('confpass'));
//test
		if($data["password"] != $confpass || $data["email"] == Null || $data["username"] == Null)
		{
			
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}	
		$data["firstname"] = $this->input->post('firstname');
		$data["lastname"] = $this->input->post('lastname');
		$data["city"] = $this->input->post('city');
		$data["country"] = $this->input->post('country');

        $data["avatar"] = NULL;

		$this->user->insert_entry($data);
		
		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
