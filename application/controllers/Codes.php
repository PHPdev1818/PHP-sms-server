<?php
require(APPPATH.'.libraries/REST_Controller.php');
 
class Codes extends REST {
    
    public function __construct() {
        parent::__construct();
    }

    public function get(){
       // respond with information about a user
       $this->load->library('twilio');
       $from = 'sms manager';
       $to = 'recipient';
       $message = 'This is a test...';

       $response = $this->twilio->sms($from, $to, $message);
       echo json_encode($response->IsError);
    }
 
    public function put(){
       $code_request = $this->input->post('code_request');       
       if(!true){
           //verify login and data here
           return;
       }
       //create code
       $codes = $this->load->model("codes");
       return json_encode(array("success"=>$codes->insert())); 
    }
 
    public function post(){
       $code_request = $this->input->post('code_request');       
       if(!true){
           //verify login and data here
           return;
       }
       //create code
       $codes = $this->load->model("codes");
       return json_encode(array("success"=>$codes->insert()));    
    }
 
    public  function delete(){
        // delete a user and respond with a status/errors
    }
}

