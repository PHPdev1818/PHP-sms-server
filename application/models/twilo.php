<?php

class twilo_messages extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function insert() {
        $this->db->query("INSERT INTO messages SET message = ?, response = ?");
    }
            
    public function select_all() {
        return $this->db->query("SELECT * FROM messages");
    }
    
    public function delete() {
        $sqlv = "DELETE FROM messages WHERE message = ?";
        $this->db->query($sql, array($_POST['message']));
    }
    
    public function update_response(){
        $sql = "UPDATE SET respsonse = ? WHERE message = ? ";
        $this->db->query($sql, array( $_POST['response'] , $_POST['message'] ) );
    }
    
    public function update_message(){
        $sql = "UPDATE SET message = ? WHERE messsage = ? ";
        $this->db->query($sql, array( $_POST['message'] , $_POST['message'] ) );
    }
    
    public function get_creds(){
        $sql = "UPDATE SET message = ? WHERE messsage = ? ";
        $this->db->query($sql, array( $_POST['message'] , $_POST['message'] ) );
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

