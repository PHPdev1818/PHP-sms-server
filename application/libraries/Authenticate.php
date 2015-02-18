<?php

class Authenticate extends REST {
    private $db;
    private $redirect;
    
    public function __construct() {
        $this->db = $this->load->model('admin'); 
        parent::__construct();
    }
    
    private function post(){
       if(!isset($_POST['username']) || !isset($_POST['password']) )
            redirect($this->redirect, 'refresh');
       $result = $this->db->userverify();
       if($result->numrows !== 1) 
           return false;
       
    }
    
    private function put(){
        $this->verify_ses();
    }
    
    private function get(){}
    
    private function delete(){}
    
    private static function verify_ses(){
        $this->load->library('session');
        if( $this->session->userdata('loggedIn') == false)
            redirect($this->redirect, 'refresh');
        return true;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

