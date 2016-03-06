<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model {

	public function register($info){
		// var_dump($info);
		// die();
		$query = 'INSERT INTO users (first_name, last_name, email, created_at, password) VALUES (?,?,?,?,?)';
		$values = array($info['first_name'], $info['last_name'], $info['email'], date("Y-m-d, H:i:s"), $info['password']);
		return $this->db->query($query, $values);
	}
	public function check_email($email){
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}

     function get_all_users(){

         return $this->db->query("SELECT * FROM users")->result_array();
     }
     function get_user_by_id($id){

         return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
     }
     function admin($id) {
     	$query = "UPDATE users SET user_level = ? WHERE id = ?";
     	$values = array("1", $id);
     	return $this->db->query($query, $values);
     }
     function update_user($id, $post){
         $query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, updated_at = ? WHERE ID = $id ";
         $values = array($post['email'], $post['first_name'], $post['last_name'], date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);

     }
     function update_password($id, $post){
         $query = "UPDATE users SET password = ?, updated_at = ? WHERE ID = $id ";
         $values = array($post['pwd'], date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);
     }
     function update_description($id, $post){
         $query = "UPDATE users SET description = ?, updated_at = ? WHERE ID = $id ";
         $values = array($post['description'], date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);
     }
     function remove_user($id){

         $query = "DELETE FROM users WHERE ID = $id ";
         return $this->db->query($query); 

     }

     
}