<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __consturct() {
        parent:: __construct();
    }

        function authenticate($email , $password){
            $query = $this->db->query("SELECT *  FROM `user_login` where email='$email' AND password = '$password' ");
            if ($query->num_rows() > 0) {
                return $query->result();
            }
                return 0;

        }

        function fetch_all($table){
            $query = $this->db->query("SELECT * FROM $table ");
            return $query->result();

        }


        function fetch_info() {
            $query = $this->db->query("SELECT * FROM `user_login` ");
            return $query->result();

        }

        function fetch_webinfo() {
            $query = $this->db->query("SELECT * FROM `grace` ");
            return $query->result();

        }

        function insert_data($data) {
            $this->db->insert('user_login', $data);
            $afftectedRows = $this->db->affected_rows();
            if (afftectedRows > 0) {
                return TRUE;
            }else {
                return FALSE;
            }
        }

        function insert_webdata($data) {
            $this->db->insert('grace', $data);
            $afftectedRows = $this->db->affected_rows();
            if (afftectedRows > 0) {
                return TRUE;
            }else {
                return FALSE;
            }
        }

        function set_update($table,$id,$data) {
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update($table);
            $afftectedRows = $this->db->affected_rows();
            if ($afftectedRows > 0) {
                return TRUE;
            }else {
                return FALSE;
            }

        }

        public function getSettings() {
            $query = $this->db->get_where('user_login', array('id' => 1));
            return $query->row_array();
        }



}

?>