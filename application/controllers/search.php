<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

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

		$this->load->model('category_model');
        $this->load->model('project_model');

		$data['categories'] = $this->category_model->get_entrys();
        $data['projects'] = $this->project_model->get_popular();

		$this->load->view('search_page', $data);
	}

	public function project($aCategory){

		$this->load->model('category_model');
		$this->load->model('project_model');

		$data['categories'] = $this->category_model->get_entrys();
        $data['projects'] = $this->project_model->get_entry('category_id', $aCategory);

		$this->load->view('search_page', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
