<?php

abstract class REST extends CI_Controller{
    
    public function __construct(){
        
      switch ($_SERVER['REQUEST_METHOD']){
          
          case 'POST':
              $this->post();
                break;
          case 'PUT':
              $this->put();
                break;
          case 'GET':
              $this->get();
                break;
          case 'DELETE':
              $this->delete();
                break;  
          default:
              die();
        }
    }

    abstract function put();

    abstract function post();

    abstract function delete();

    abstract function get();
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

