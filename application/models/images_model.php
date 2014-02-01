<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class images_model extends CI_Model {

    var $project_id = 0;
    var $path = '';

    function __construct() {
        parent::__construct();
    }

    function get_entries($aKey, $aValue){
        $this->db->where($aKey, $aValue);
        $this->db->select('id, project_id, path');

        $query = $this->db->get('images')->result_array();

        return $query;

    }

    function insert_entry($aImage) {
        $this->project_id = $aImage['project_id'];
        $this->path = $aImage['path'];


        $this->db->insert('images', $this);
    }

    function update_entry() {
        $data = array(
            /*
            'project_id' => $this->input->post('project_id2'),
            'path' => $this->input->post('path2')
            */
            'project_id' => $aImage['project_id'],
            'path' => $aImage['path']
        );

        $this->db->where('project_id', $this->project_id);
        $this->db->where('path', $this->path);
        $this->db->update('images', $data);

    }

    function remove_entry(){

        NULL;
    }

}











