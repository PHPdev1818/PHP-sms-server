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
            ;
        }
        
        private function delete(){
            
        }
}