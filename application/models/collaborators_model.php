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


    function insert_entry() {

        $wCollaborator['id'] = $this->input->post('id');
        $wCollaborator['project_id'] = $this->input->post('project_id');
        $wCollaborator['start_date'] = $this->input->post('start_date');
        $wCollaborator['end_date'] = $this->input->post('end_date');

        $this->user_id = $wCollaborator['id'];
        $this->project_id = $wCollaborator['project_id'];
        $this->start_date = $wCollaborator['start_date'];
        $this->end_date = $wCollaborator['end_date'];

        $this->db->insert('collaborators', $this);
    }

    function update_entry() {
        
        $wCollaborator['id'] = $this->input->post('id');
        $wCollaborator['project_id'] = $this->input->post('project_id');
        $wCollaborator['start_date'] = $this->input->post('start_date');
        $wCollaborator['end_date'] = $this->input->post('end_date');

        $data = array(
            'user_id' => $wCollaborator['id'],
            'project_id' => $wCollaborator['project_id'],
            'start_date' => $wCollaborator['start_date'],
            'end_date' => $wCollaborator['end_date']
        );

        $this->db->where('user_id', $data['user_id']);
        $this->db->where('project_id', $data['project_id']);
        $this->db->update('collaborators', $data);

    }

    function remove_entry(){
        $wCollaborator['id'] = $this->input->post('id');
        
        $this->db->where('id', $wCollaborator['id']);
        $this->db->delete('collaborators');   
    }

}











