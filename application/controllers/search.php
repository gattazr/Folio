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
	public function __construct(){
		parent::__construct();
		$this->load->model('category_model');
        $this->load->model('project_model');
	}

	public function index(){
		$data['categories'] = $this->category_model->get_entrys();
        $data['projects'] = $this->project_model->get_all();

		$this->load->view('search_page', $data);
	}

	public function project($aCategory){
		$data['categories'] = $this->category_model->get_entrys();
        $data['projects'] = $this->project_model->get_entry('category_id', $aCategory);

		$this->load->view('search_page', $data);
	}

	public function all(){
		$wKeywords = $this->input->get('keywords');
		$wKeywords = explode(" ", $wKeywords);
		
		$data['categories'] = $this->category_model->get_entrys();

		foreach ($wKeywords as $wKeyword ) {
			$wLikeCondition[] = array('name', $wKeyword); 
			$wLikeCondition[] = array( 'description', $wKeyword); 
			// loook for name of projects
			// look in description of repo
		}
		$data['projects'] = $this->project_model->get_like($wLikeCondition);

		$this->load->view('search_page', $data);
	}

	private function addToArray($aTargetArray, $aSourceArray){

	}
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */
