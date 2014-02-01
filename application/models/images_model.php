<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class images_model extends CI_Model {

    var $project_id = 0;
    var $path = '';

    function __construct() {
        parent::__construct();
    }

    function get_entrys(){
        /*
        $this->project_id = $this->input->post('project_id');
        */
        $this->project_id = '2';

        $this->db->where('project_id', $this->project_id);
        $this->db->select('project_id, path');

        $query = $this->db->get('images')->result_array();

        return $query;

    }

    function insert_entry() {
        /*
        $this->project_id = $this->input->post('project_id');
        $this->path = $this->input->post('path');
        */
        $this->project_id = '1';
        $this->path = 'http://i.imgur.com/PIhLCwo.jpg';


        $this->db->insert('images', $this);
    }

    function update_entry() {
        /*
        $this->project_id = $this->input->post('project_id');
        $this->path = $this->input->post('path');
        */

        $this->project_id = '1';
        $this->path = 'http://i.imgur.com/PIhLCwo.jpg';

        $data = array(
            /*
            'project_id' => $this->input->post('project_id2'),
            'path' => $this->input->post('path2')
            */
            'project_id' => '2',
            'path' => 'http://i.imgur.com/PIhlcllwo.jpg'
        );

        $this->db->where('project_id', $this->project_id);
        $this->db->where('path', $this->path);
        $this->db->update('images', $data);

    }

    function remove_entry(){

        NULL;
    }

}











