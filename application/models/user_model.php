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

    function insert_entry($aArray) {
        
        $this->id = 0;
        $this->username = $aArray['username'];
        $this->firstname = $aArray['firstname'];
        $this->lastname = $aArray['lastname'];
        $this->city = $aArray['city'];
        $this->country = $aArray['country'];
        $this->avatar = $aArray['avatar'];
        $this->password = $aArray['password'];
        $this->email = $aArray['email'];

        $this->db->insert('user', $this);
    }

    /*
    function delete_entry() {
        $username = 'devDusername';
        $this->db->where('username', $username);
        $this->db->delete('user');
    }
    */

    function update_entry() {
        
//        $this->username = $this->input->post('username');
        $this->username = 'devEusername';

        $data = array(
/*
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'city' => $this->input->post('city'),
            'country' => $this->input->post('country'),
            'avatar' => $this->input->post('avatar'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email')
*/
            'username' => 'username',
            'firstname' => 'firstname',
            'lastname' => 'lastname',
            'city' => 'city',
            'country' => 'country',
            'avatar' => 'avatar',
            'password' => 'password',
            'email' => 'email'
        );

        $this->db->where('username', $this->username);
        $this->db->update('user', $data);

    }

    function remove_entry(){

        NULL;
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
