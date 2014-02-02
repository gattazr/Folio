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
	public function showProject($projectID){
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

    public function edit(){
        $this->load->model('category_model');
    }

    public function add_project(){
        if($this->session->userdata('username')){
            $this->load->model('category_model');
            $data['categoryArray'] = $this->category_model->get_entrys();

            $data['username'] = $this->session->userdata('username');
            $this->load->model('user_model');
            $data['userset'] = $this->user_model->find_entry('username', $data['username']);
            $data['id'] = $data['userset']['id'];

            $this->load->view('add_project', $data);
        }
        
    }

    public function new_project(){
        if ($this->input->post('submitted') != NULL){
            $data["id"] = $this->input->post('project_id');
            $data["owner"] = $this->session->userdata('id');
            $data["name"] = $this->input->post('name');
            $data["description"] = $this->input->post('description');
            $data["logo"] = $this->input->post('logo');
            $data["startdate"] = $this->input->post('startdate');
            $data["enddate"] = $this->input->post('enddate');
            $data["category_id"] = $this->input->post('category_id');
            
            $this->load->model('project_model', 'project');

            $this->project->insert_entry($data);
            header('Location: ' . base_url('index.php/project/' . $this->db->insert_id()));
                // echo 'valid new project';
        }
        header('Location: '.base_url(''));
    }

}

/* End of file project.php */
/* Location: ./application/controllers/project.php */
