<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class project_model extends CI_Model {

    var $id = 0;
    var $owner = 0;
    var $name = '';
    var $description = '';
    var $logo = '';
    var $startdate = '';
    var $enddate = '';

    function __construct() {
        parent::__construct();
    }

    function get_entry($key,$value) {
        $this->db->select('id, owner, name, description, logo, startdate, enddate, status, category_id');
        $this->db->from('project');
        $this->db->where($key, $value);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_information($projectID) {
        $this->db->select('category.name, project.startdate, project.enddate, project.status');
        $this->db->from('category, project');
        $this->db->where('project.category_id = category.id AND project.id = ' . $projectID);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_collaborators($projectID) {
        $this->db->select('user.firstname, user.lastname, user.city, user.country, user.avatar, collaborators.start_date, collaborators.description');
        $this->db->from('user, project, collaborators');
        $where = 'user.id != project.owner AND user.id = collaborators.user_id AND collaborators.project_id = project.id AND project.id = '. $projectID;        
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_popular(){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->limit('3');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_local(){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->limit('3');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_recent(){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->limit('3');

        $query = $this->db->get();

        return $query->result_array();
    }
    function find_entry($aKey, $aValue){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->where($aKey, $aValue);

        $query = $this->db->get();

        return $query->result_array();
    }


    function insert_entry() {

        
        $this->id = $this->input->post('owner_id');
        $this->owner = $this->input->post('owner');
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        $this->logo = $this->input->post('logo');
        $this->startdate = $this->input->post('startdate');
        $this->enddate = $this->input->post('enddate');

        $this->db->insert('project', $this);
    }

   /* 
    function update_entry() {
        
        $this->id = $this->input->post('id');

        $data = array(
                    'owner' = $this->input->post('owner'),
                    'name' = $this->input->post('name'),
                    'description' = $this->input->post('description'),
                    'logo' = $this->input->post('logo'),
                    'startdate' = $this->input->post('startdate'),
                    'enddate' = $this->input->post('enddate'),
        );

        $this->db->where('id', $this->id);
        $this->db->update('mytable', $data);

    }

    function remove_entry(){

        NULL;
    }
    */
}











