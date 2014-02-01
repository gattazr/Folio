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
    }

}











