<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class twilio extends REST {

	public function __construct(){
            include_once(APPPATH.'libraries/Services/Twilio.php');
            $twilio_service = new Services_Twilio(TWILIO_SID, TWILIO_TOKEN);

            /**
             * Return a twilio services object.
             *
             * Since we don't want to create multiple connection objects we
             * will return the same object during a single page load
             *
             * @return object Services_Twilio
             */

            parent::__construct();
	}
        
	public function sample(){
		$from = '0000000000';
		$to = '0000000000';
		$message = 'This is a test...';

		$response = $this->twilio->sms($from, $to, $message);
		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
		else
			echo 'Sent message to ' . $to;
	}
        
        private function put() {
            
        }
        
        private function post(){
            switch ($this->input->post("action")){
                case "setup" :
                    //$client = new //Services_Twilio($sid, $token);
                    
                    $number = $client->account->incoming_phone_numbers->get("PN2a0747eba6abf96b7e3c3ff0b4530f6e");
                    $number->update(array(
                            "VoiceUrl" => "http://demo.twilio.com/docs/voice.xml",
                            "SmsUrl" => "http://demo.twilio.com/docs/sms.xml"
                    ));
echo $number->voice_url;
                    $this->twilio->sms($from, $to, $message);
                    break;
            }
        }
        private function get() {
           // /2010-04-01/Accounts/{AccountSid}/Messages;
            /*
             * Body	The text of the message you want to send, limited to 1600 characters.
             * Parameter	Description
From	A Twilio phone number enabled for the type of message you wish to send. Only phone numbers or short codes purchased from Twilio work here; you cannot (for example) spoof messages from your own cell phone number.
To	The destination phone number. Format with a '+' and country code e.g., +16175551212 (E.164 format). For 'To' numbers without a '+', Twilio will use the same country code as the 'From' number. Twilio will also attempt to handle locally formatted numbers for that country code (e.g. (415) 555-1212 for US, 07400123456 for GB). If you are sending to a different country than the 'From' number, you must include a '+' and the country code to ensure proper delivery.
      token ee038cfc585cc251adffe5c4da6ce416    
      app id AC34f41eaab6530ea5a1e0f8dbe61e67f8       * 
             *    */
            //ec2-52-10-241-122.us-west-2.compute.amazonaws.com
            // this line loads the library 
require('/path/to/twilio-php/Services/Twilio.php'); 
 
$account_sid = 'AC31b9a6b5b45b747b96f4bcda577ee147'; 
$auth_token = '[AuthToken]'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array(  
	'From' => "+12092601500",    
));
        }
        
        private function delete(){
            
        }
}