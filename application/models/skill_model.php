<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class skill_model extends CI_Model {

    var $owner = 0;
    var $name = '';
    var $level = '';

    function __construct() {
        parent::__construct();
    }


    function get_entry(){
//        $this->owner_id = $this->input->post('owner_id');
        $this->owner = '12';

        $this->db->select('name,level');
        $this->db->where('owner',$this->owner);

        $query = $this->db->get('skill')->result_array();

        return $query;
    }


    function insert_entry() {
        /*
        $this->owner_id = $this->input->post('owner_id');
        $this->name = $this->input->post('name');
        $this->level = $this->input->post('level');
        */

        $this->owner = '12';
        $this->name = 'dev_croftp2skill';
        $this->level = 'dev_croftp2skilllevel';

        $this->db->insert('skill', $this);
    }

    function remove_entry(){
        /*
        $this->owner_id = $this->input->post('owner_id');
        $this->name = $this->input->post('name');
        */

/*
        $this->owner_id = 'dev_croftp2username';
        $this->name = 'dev_croftp2firstname';
        
        $this->db->delete('skill', $this);
*/
        NULL;
    }

    function modify_entry(){
        /*
        $this->owner_id = $this->input->post('owner_id');
        $this->name = $this->input->post('name');
        */

        $this->owner = '12';
        $this->name = 'sql wrangling';

        $data = array(
            /*
            'name' => $this->input->post('name'),
            'level' => $this->input->post('level')
            */
            'name' => 'writing code',
            'level' => 'the best'
        );

        $this->db->where('owner', $this->owner);
        $this->db->where('name', $this->name);
        $this->db->update('skill', $data);


    }
}











