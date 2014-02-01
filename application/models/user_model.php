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

    function find_entry(){
//        $this->username = $this->input->post('username');
        $this->username = 'devEusername';

        $this->db->select('id, username, firstname, lastname, city, country, avatar, password, email');
        $this->db->where('username',$this->username);
        $query = $this->db->get('user')->result_array();

        return $query;
    }

    function insert_entry() {
        /*$this->username = $this->input->post('username');
        $this->firstname = $this->input->post('firstname');
        $this->lastname = $this->input->post('lastname'):
        $this->city = $this->input->post('city');
        $this->country = $this->input->post('country');
        $this->avatar = $this->input->post('avatar'):*/

        $this->id = 0;
        $this->username = 'devEusername';
        $this->firstname = 'devEfirstname';
        $this->lastname = 'devElastname';
        $this->city = 'devEcity';
        $this->country = 'devEcountry';
        $this->avatar = 'devEavatar';
        $this->password = 'devEpassword';
        $this->email = 'devEemail';

        $this->db->insert('user', $this);
    }

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




}
