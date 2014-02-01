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
    function get_like($aLikes){
        $this->db->select('id, owner, name, description, logo, startdate, enddate, status, category_id');
        $this->db->from('project');
        foreach ($aLikes as $wLike){
            $this->db->or_like( $wLike[0], $wLike[1]); 
        }
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_entry($key,$value) {
        $this->db->select('id, owner, name, description, logo, startdate, enddate, status, category_id');
        $this->db->from('project');
        $this->db->where($key, $value);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_all() {
        $this->db->select('id, owner, name, description, logo, startdate, enddate, status, category_id');
        $this->db->from('project');
        $this->db->limit('12');
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
        $this->db->select('user.username, user.firstname, user.lastname, user.city, user.country, user.avatar, collaborators.start_date, collaborators.description');
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

        $this->db->select('project.id, project.owner, project.name, project.description, project.logo, project.startdate, project.enddate');
        $this->db->from('project, user');
        $this->db->where('owner = user.id AND user.city = "Bellingham"');
        $this->db->limit('3');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_recent(){

        $this->db->select('id,owner,name,description,logo,startdate,enddate');
        $this->db->from('project');
        $this->db->order_by('startdate', 'desc');
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


    function insert_entry($aProject) {

        $this->id = $aProject['id'];
        $this->owner = $aProject['owner'];
        $this->name = $aProject['name'];
        $this->description = $aProject['description'];
        $this->logo = $aProject['logo'];
        $this->startdate = $aProject['startdate'];
        $this->enddate = $aProject['enddate'];
        $this->category_id = $aProject['category_id'];

        $this->db->insert('project', $this);

        
    }

   
    function update_entry($aProject) {
        
        $data = array(
                    'id' => $aProject['id'],
                    'name' => $aProject['name'],
                    'description' => $aProject['description'],
                    'logo' => $aProject['logo'],
                    'startdate' => $aProject['startdate'],
                    'enddate' => $aProject['enddate'],
        );

        $this->db->where('id', $data['id']);
        $this->db->update('project', $data);

    }

    function remove_entry($aProject){
        
        $this->db->where('id', $aProject['id']);
        $this->db->delete('project'); 
    }
}











