<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
   public function index(){
       //verifylogin 
       $this->load->view('admin-panel');
   }
    

   public function __construct(){
       parent::__construct();
   }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

