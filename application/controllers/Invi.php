<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invi extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Invi_model');
		$this->load->helper('captcha');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('index1.php');
		$this->load->view('includes/footer.php');
	}

	public function register(){
		$config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
			'font_path'     => 'font/mono.ttf',
			'img_width'     => '256',
            'img_height'    => 80,
            'word_length'   => 5,
			'font_size'     => 256,
			'colors'        => array(
				'background'     => array(206, 206, 206),
				'border'         => array(0, 0, 0),
				'text'           => array(0, 0, 0),
				'grid'           => array(85, 80, 80)
			 )
        );
        $captcha = create_captcha($config);
		$this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
		$data['captchaImg'] = $captcha['image'];
		$data['templatePreview'] = $this->Invi_model->get_template_preview();
		$this->load->view('includes/header.php');
		$this->load->view('register.php',$data);
		$this->load->view('includes/footer.php');
	}

	public function send_otp(){
		$p = $this->input->post('number');
		$phoneExist = False;
		if($this->Invi_model->phone_exists($p)){
			$phoneExist = True;
			echo json_encode($phoneExist);
			return;
		}
		$this->load->library('twilio');
		$from = '+17792073322';
		$to = '+91'.$this->input->post('number');
		$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string_shuffled = str_shuffle($string);
		$otp = substr($string_shuffled, 1, 7);
		$response = $this->twilio->sms($from, $to,$otp);
		if($response->IsError){
			echo 'Otp Has been Not sent';	
		}
		else{
			echo 'Otp Has been sent';
		}
		$data['otp'] = $otp;
		$otp=$this->Invi_model->insert($data);
		if($otp>0){
			echo "Otp Saved Successfully";
		}
		else{
			echo "Insert error !";
		}
	}

	public function verify_otp(){
		$otp_verify = $this->input->post('otp_verify');
		$otp = $this->Invi_model->get_last_row();
		$verified;
		if($otp_verify == $otp){
			$verified = True;
		}
		else{
			$verified = False;
		}
		echo json_encode($verified);
	}

	public function save_gst(){
		$gst = $this->input->post('gst');
		$gst_exists = False;
		if($this->Invi_model->gst_exists($gst)){
			$gst_exists = True;
			echo json_encode($gst_exists);
			return;
		}
		$data['gst'] = $gst;
		$gst=$this->Invi_model->insert_gst($data);
		if($gst>0){
			echo "Gst saved successfully";
		}
		else{
			echo "Insert error !";
		}
	}

	public function refresh(){
        // Captcha configuration
        $config = array(
            'img_path'      => 'captcha_images/',
			'img_url'       => base_url().'captcha_images/',
			'font_path'     => 'font/mono.ttf',
            'img_width'     => '256',
            'img_height'    => 80,
            'word_length'   => 5,
            'font_size'     => 256,
			'colors'        => array(
				'background'     => array(206, 206, 206),
				'border'         => array(0, 0, 0),
				'text'           => array(0, 0, 0),
				'grid'           => array(85, 80, 80)
			 )
        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and store new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
        
        // Display captcha image
        echo $captcha['image'];
	}
	
	public function verify_captcha(){
		$inputCaptcha = $this->input->post('captcha');
		$sessCaptcha = $this->session->userdata('captchaCode');
		$verified;
		if($inputCaptcha == $sessCaptcha){
			$verified = True;
		}else{
			$verified = False;
		}
		echo json_encode($verified);
	}

	public function register_info_form(){
		$m = $this->input->post('email_address');
		$emailExist = False;
		if($this->Invi_model->email_exists($m)){
			$emailExist = True;
			echo json_encode($emailExist);
			return;
		}
		$p = $this->input->post('number');
		$phoneExist = False;
		if($this->Invi_model->phone_exists($p)){
			$phoneExist = True;
			echo json_encode($phoneExist);
			return;
		}
		$trade_name = $this->input->post('trade_name');
		$address = $this->input->post('address');
    	$pan=$this->input->post('pan');
    	$state_code=$this->input->post('state_code');
    	$constitution_of_buisness=$this->input->post('constitution_of_buisness');
    	// $registration=$this->input->post('registration');
    	$hsn_code=$this->input->post('hsn_code');
    	$email_address=$this->input->post('email_address');
    	$password=$this->input->post('password');
		$number=$this->input->post('number');
		$current_location = $this->input->post('current_location');
		$business_card = $this->input->post('business_card');
		$website_link = $this->input->post('website_link');
		$account_no = $this->input->post('account_no');
		$ifsc_code = $this->input->post('ifsc_code');
		$bank_name = $this->input->post('bank_name');
		$account_name = $this->input->post('account_name');
		$data = array(
			'trade_name'=>$trade_name,
			'address'=>$address,
			'pan'=>$pan,
			'state_code'=>$state_code,
			'business_constitution'=>$constitution_of_buisness,
			'hsn_code'=>$hsn_code,
			'phone_number'=>$number,
			'email_address'=>$email_address,
			'password'=>$password,
			'account_no'=>$account_no,
			'ifsc_code'=>$ifsc_code,
			'bank_name'=>$bank_name,
			'account_name'=>$account_name,
			'current_location'=>$current_location,
			'business_card'=>$business_card,
			'website_link'=>$website_link
		);
		$this->Invi_model->insert_register_info($data);
	}

	public function save_selected_template(){
		$template_path = $this->Invi_model->getTemplatePathById();
		$this->Invi_model->insertSelectedTemplate($template_path[0]->template_path);
	}

	public function sub_user_register(){
		$p = $this->input->post('mobile_number');
		$phoneExist = False;
		if($this->Invi_model->phone_exists($p)){
			$phoneExist = True;
			echo json_encode($phoneExist);
			return;
		}
		$method = 'http';
		$username = 'chetan.sharma@webtenor.com';
		$numbers = '+91'.$this->input->post('mobile_number');;
		$s = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = str_shuffle($s);
		$message = substr(str_shuffle($string), 1, 7);
		$apiKey = '22842862-2E0F-C09B-B93B-79046ADC13D0';
		$sender = '+917780950863';
		$ch = curl_init('https://api-mapper.clicksend.com/http/v2/send.php?method='.$method.'&username='.$username.'&key='.$apiKey.'&to='.$numbers.'&message='.$message.'&senderid='.$sender."'");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		if(!$response){
			print_r($response);
			echo 'Message sent';	
		}
		else{
			print_r($response);
			echo 'Message Not Sent';
		}
		curl_close($ch);
		$this->Invi_model->registerSubUser($this->input->post('mobile_number'),MD5($message));
	}
}
