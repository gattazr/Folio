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


    function get_top_three(){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->limit('3');

        $query = $this->db->get();

        return $query;
<<<<<<< HEAD
    }


    function get_one(){


        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->limit('1');

        $query = $this->db->get();

        return $query;
    }


    function insert_entry() {

        
        $this->id = $this->input->post('owner_id');
        $this->owner = $this->input->post('owner');
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        $this->logo = $this->input->post('logo');
        $this->startdate = $this->input->post('startdate');
        $this->enddate = $this->input->post('enddate');

        $this->db->insert('user', $this);
    }

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
=======
>>>>>>> devD
    }

}











