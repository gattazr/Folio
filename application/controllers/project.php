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
        $projectID = 2;
        $this->load->model('project_model');
        $this->load->model('pskill_model');
        $this->load->model('user_model');
        $project = $this->project_model->get_entry('id', $projectID);
        $user = $this->user_model->find_entry('id',$project[0]['owner']);
        $information = $this->project_model->get_information($projectID);
        $collaborators = $this->project_model->get_collaborators($projectID);
        $data['collaborators'] = $collaborators;
        $data['user'] = $user;
        $skill = $this->pskill_model->get_entry('owner', $projectID);
        $data['project'] = $project;
        $data['skill'] = $skill;
        $data['information'] = $information;
        $this->load->view('project', $data);
	}

    public function add_project(){
//		$data['categoryArray'] = $this->category_model->get_entrys();
//        $data['username'] = $this->session->userdata('user_id');
        $this->load->view('add_project');
    }

    public function new_project(){

        $data["id"] = $this->input->post('project_id');
        $data["owner"] = $this->input->post('owner_id');
        $data["name"] = $this->input->post('name');
        $data["description"] = $this->input->post('description');
        $data["logo"] = $this->input->post('logo');
        $data["startdate"] = $this->input->post('startdate');
        $data["enddate"] = $this->input->post('enddate');
        $data["category"] = $this->input->post('category');
        
        $this->load->model('project_model', 'project');

        $this->project->insert_entry($data);
        header('Location: ' . base_url('index.php/project/' . $this->db->insert_id()));
    }

}

/* End of file project.php */
/* Location: ./application/controllers/project.php */
