<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class skill_model extends CI_Model {

    var $owner = 0;
    var $name = '';
    var $level = '';

    function __construct() {
        parent::__construct();
    }


    function find_entries($aKey, $aValue){
        $this->db->select('owner, name,level');
        $this->db->where($aKey, $aValue);

        $wResult = $this->db->get('skill')->result_array();

        return $wResult;
    }



    function insert_entry() {
        $wOwner['owner'] = $this->input->post('owner_id');
        $wOwner['name'] = $this->input->post('name');
        $wOwner['level'] = $this->input->post('level');
        

        $this->owner = $wOwner['owner'];
        $this->name = $wOwner['name'];
        $this->level = $wOwner['leve'];

        $this->db->insert('skill', $this);
    }

    function remove_entry(){
        $wOwner['owner'] = $this->input->post('owner_id');
        $wOwner['name'] = $this->input->post('name');


        $this->owner_id = $wOwner['owner'];
        $this->name = $wOwner['name'];        
        $this->db->delete('skill', $this);
    }

    function modify_entry(){
        $wOwner['owner'] = $this->input->post('owner_id');
        $wOwner['name'] = $this->input->post('name');
        $wOwner['level'] = $this->input->post('level');

        $data = array(
            'owner' => $wOwner['owner_id'],
            'name' => $wOwner['owner'],
            'level' => $wOwner['name']
        );

        $this->db->where('owner', $data['data']);
        $this->db->where('name', $this->name);
        $this->db->update('pskill', $data);
    }
}











