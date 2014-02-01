<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Project
	 *	- or -  
	 * 		http://example.com/index.php/Project/index
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
        $this->load->model('project_model');
        $collaborators = $this->project_model->get_collaborators();
        $data['collaborators'] = $collaborators;
        $this->load->view('project', $data);
	}
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */
