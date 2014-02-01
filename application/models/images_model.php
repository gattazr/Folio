<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class images_model extends CI_Model {

    var $project_id = 0;
    var $path = '';

    function __construct() {
        parent::__construct();
    }

    function get_entrys($aKey, $aValue){
        $this->db->where($aKey, $aValue);
        $this->db->select('id, project_id, path');

        $query = $this->db->get('images')->result_array();

        return $query;

    }

    function insert_entry() {
        $wImage['project_id'] = $this->input->post('project_id');;
        $wImage['id'] = $this->input->post('id');;
        $wImage['path'] = $this->input->post('path');;
        
        $this->project_id = $wImage['project_id'];
        $this->path = $wImage['path'];


        $this->db->insert('images', $this);
    }

    function update_entry() {
        /*
        $this->project_id = $this->input->post('project_id');
        $this->path = $this->input->post('path');
        */

        $wImage['project_id'] = $this->input->post('');;
        $wImage['path'] = $this->input->post('');;
        
        $data = array(
            /*
            'project_id' => $this->input->post('project_id2'),
            'path' => $this->input->post('path2')
            */
            'project_id' => $wImage['project_id'],
            'path' => $wImage['path']
        );

        $this->db->where('project_id', $this->project_id);
        $this->db->where('path', $this->path);
        $this->db->update('images', $data);

    }

    function remove_entry(){

        NULL;
    }

}











