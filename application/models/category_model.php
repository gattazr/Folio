<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_model extends CI_Model {

    var $id = 0;
    var $name = '';

    function __construct() {
        parent::__construct();
    }

    function get_entrys(){

        $this->db->select('*');

        $query = $this->db->get('category')->result_array();

        return $query;
    }

    function insert_entry() {
        $this->id = '0';
        $this->name = 'Health';

        $this->db->insert('category', $this);
    }

    function update_entry() {
        /*
        $this->project_id = $this->input->post('project_id');
        $this->path = $this->input->post('path');
        */

        $this->id = '1';

        $data = array(
            /*
            'project_id' => $this->input->post('project_id2'),
            'path' => $this->input->post('path2')
            */
            'id' => '1',
            'name' => 'Arts'
        );

        $this->db->where('id', $this->id);
        $this->db->update('category', $data);

    }

    function remove_entry(){

        NULL;
    }

}











