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



    function insert_entry($aEntry) {

        $this->owner = $aEntry['owner'];
        $this->name = $aEntry['name'];
        $this->level = $aEntry['leve'];

        $this->db->insert('skill', $this);
    }

    function remove_entry($aEntry){

        $this->owner_id = $aEntry['owner'];
        $this->name = $aEntry['name'];        
        $this->db->delete('skill', $this);
    }

    function modify_entry($aEntry){
        $data = array(
            'owner' => $aEntry['owner_id'],
            'name' => $aEntry['owner'],
            'level' => $aEntry['name']
        );

        $this->db->where('owner', $data['data']);
        $this->db->where('name', $this->name);
        $this->db->update('pskill', $data);
    }
}











