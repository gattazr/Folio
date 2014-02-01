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

    function __construct() {
        parent::__construct();
    }

    function insert_entry() {
        /*$this->username = $this->input->post('username');
        $this->firstname = $this->input->post('firstname');
        $this->lastname = $this->input->post('lastname'):
        $this->city = $this->input->post('city');
        $this->country = $this->input->post('country');
        $this->avatar = $this->input->post('avatar'):*/

       
        $this->username = 'devDusername';
        $this->firstname = 'devDfirstname';
        $this->lastname = 'devDlastname';
        $this->city = 'devDcity';
        $this->country = 'devDcountry';
        $this->avatar = 'devDavatar';
       
        $this->db->insert('user', $this);
    }

    function login($email, $password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $mail);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query -> num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
 }

}
