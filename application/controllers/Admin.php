<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends REST {
  
   public function __construct(){
       parent::__construct();
   }
   
   public function post(){
      
   }
   
   public function put(){
       
   }
   
   public function get(){
       
   }
   
   public function delete(){
       
   }
  
   public function index(){
       //verifylogin 
       $this->load->view('admin-panel');
   }
   
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

