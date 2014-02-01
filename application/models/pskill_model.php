<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pskill_model extends CI_Model {

    var $owner = 0;
    var $name = '';
    var $level = '';

    function __construct() {
        parent::__construct();
    }

    function get_entry($key, $value){
        $this->db->select('owner, name,level');
        $this->db->where($key,$value);

        $query = $this->db->get('pskill')->result_array();

        return $query;
    }


    function insert_entry($aEntry) {      

        $this->owner = $aEntry['owner'];
        $this->name = $aEntry['name'];
        $this->level = $aEntry['leve'];

        $this->db->insert('pskill', $this);
    }

    function remove_entry($aEntry){

        $this->owner_id = $aEntry['owner'];
        $this->name = $aEntry['name'];        
        $this->db->delete('pskill', $this);
    }

    function modify_entry(){
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











