<?php
require(APPPATH.'.libraries/REST_Controller.php');
 
class Codes_api extends REST_Controller {
 
    function codes_get(){
       // respond with information about a user
       $this->load->library('twilio');
       $from = 'sms manager';
       $to = 'recipient';
       $message = 'This is a test...';

       $response = $this->twilio->sms($from, $to, $message);
       echo json_encode($response->IsError);
    }
 
    function codes_put(){
       $code_request = $this->input->post('code_request');       
       if(!true){
           //verify login and data here
           return;
       }
       //create code
       $codes = $this->load->model("codes");
       return json_encode(array("success"=>$codes->insert())); 
    }
 
    function codes_post(){
       $code_request = $this->input->post('code_request');       
       if(!true){
           //verify login and data here
           return;
       }
       //create code
       $codes = $this->load->model("codes");
       return json_encode(array("success"=>$codes->insert()));    
    }
 
    function codes_delete(){
        // delete a user and respond with a status/errors
    }
}

