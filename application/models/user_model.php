<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    /*devD 
    is var necessary? */
    var $id = 0;
    var $username = '';
    var $firstname = '';
    var $lastname = '';
    var $city = '';
    var $country = '';
    var $avatar = '';
    var $password = '';

    function __construct() {
        parent::__construct();
    }

    function find_entry($aKey, $aValue){

        $this->db->select('id, username, firstname, lastname, city, country, avatar, password, email');
        $this->db->where($aKey, $aValue);
        $wResult = $this->db->get('user')->result_array();

        return $wResult[0];
    }

    function insert_entry($aModel) {
        
        $this->id = 0;
        $this->username = $aModel['username'];
        $this->firstname = $aModel['firstname'];
        $this->lastname = $aModel['lastname'];
        $this->city = $aModel['city'];
        $this->country = $aModel['country'];
        $this->avatar = $aModel['avatar'];
        $this->password = $aModel['password'];
        $this->email = $aModel['email'];

        $this->db->insert('user', $this);
    }

    
    function delete_entry($aModel) {
        $this->db->where('username', $aModel['username']);
        $this->db->delete('user');
    }
    

    function update_entry($aModel) {
        
        $data = array(
            'username' => $aModel['username'],
            'firstname' => $aModel['firstname'],
            'lastname' => $aModel['lastname'],
            'city' => $aModel['city'],
            'country' => $aModel['country'],
            'avatar' => $aModel['avatar'],
            'password' => $aModel['password'],
            'email' => $aModel['email']
        );

        $this->db->where('username', $data['username']);
        $this->db->update('user', $data);

    }
    
    function login($email, $password){
        $this->db->select('id, username, email');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1){
            $results = $query->result();
            return $results[0];
        }
        else{
            return false;
        }
 }

}
