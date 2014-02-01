<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class collaborators_model extends CI_Model {

    var $user_id = 0;
    var $project_id = 0;
    var $start_date = '';
    var $end_date = '';

    function __construct() {
        parent::__construct();
    }

    function find_projects_by_user(){
//        $this->user_id = $this->input->post('user_id');
        $this->user_id = '1';

        $this->db->select('user_id, project_id, start_date, end_date, description');
        $this->db->where('user_id', $this->user_id);
        $query = $this->db->get('collaborators')->result_array();

        return $query;
    }

    function find_users_by_project(){
//        $this->project_id = $this->input->post('project_id');
        $this->project_id = '1';

        $this->db->select('user_id, project_id, start_date, end_date, description');
        $this->db->where('project_id', $this->project_id);
        $query = $this->db->get('collaborators')->result_array();

        return $query;
    }


    function insert_entry() {
/*
        $this->user_id = $this->input->post('user_id');
        $this->project_id = $this->input->post('project_id');
        $this->start_date = $this->input->post('path');
        $this->end_date = $this->input->post('path');
*/
        $this->user_id = '2';
        $this->project_id = '1';
        $this->start_date = '20140130';
        $this->end_date = 'NULL';

        $this->db->insert('collaborators', $this);
    }

    function update_entry() {
        /*
        $this->user_id = $this->input->post('user_id');
        $this->project_id = $this->input->post('project_id');
        */

        $this->user_id = '2';
        $this->project_id = '1';

        $data = array(
            /*
            'user_id' => $this->input->post('user_id2'),
            'project_id' => $this->input->post('project_id2'),
            'start_date' => $this->input->post('start_date2'),
            'end_date' => $this->input->post('end_date2')
            */
            'user_id' => '2',
            'project_id' => '1',
            'start_date' => '19700101',
            'end_date' => NULL
        );

        $this->db->where('user_id', $this->user_id);
        $this->db->where('project_id', $this->project_id);
        $this->db->update('collaborators', $data);

    }

    function remove_entry(){

        NULL;
    }

}











