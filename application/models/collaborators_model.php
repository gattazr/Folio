<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class collaborators_model extends CI_Model {

    var $user_id = 0;
    var $project_id = 0;
    var $start_date = '';
    var $end_date = '';

    function __construct() {
        parent::__construct();
    }

    function find_collaborators($aKey, $aValue){
        $this->db->select('user_id, project_id, start_date, end_date, description');
        $this->db->where($aKey, $aValue);
        $wResult = $this->db->get('collaborators')->result_array();

        return $wResult;
    }


    function insert_entry($aCollaborator) {

        $this->user_id = $aCollaborator['id'];
        $this->project_id = $aCollaborator['project_id'];
        $this->start_date = $aCollaborator['start_date'];
        $this->end_date = $aCollaborator['end_date'];

        $this->db->insert('collaborators', $this);
    }

    function update_entry($aCollaborator) {

        $data = array(
            'user_id' => $aCollaborator['id'],
            'project_id' => $aCollaborator['project_id'],
            'start_date' => $aCollaborator['start_date'],
            'end_date' => $aCollaborator['end_date']
        );

        $this->db->where('user_id', $data['user_id']);
        $this->db->where('project_id', $data['project_id']);
        $this->db->update('collaborators', $data);

    }

    function remove_entry($aCollaborator){
        
        $this->db->where('id', $aCollaborator['id']);
        $this->db->delete('collaborators');   
    }

}











