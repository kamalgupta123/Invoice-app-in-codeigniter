<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
    function __construct() {
		parent::__construct();
		$this->load->model('Invi_model');
        $this->load->library('session');
        $this->load->helper('string');
	}
    public function index()  
    {  
        $this->load->view('includes/header.php'); 
        $this->load->view('login'); 
        $this->load->view('includes/footer.php');  
    }  
    public function process()  
    {  
        $phone_number = $this->input->post('phone_number');  
        $pass = $this->input->post('password');
        $user_details = $this->Invi_model->getUserDetails($phone_number);
        if (($user_details[0]->password==$pass) && ($user_details[0]->status!=0))   
        {  
            $this->session->set_userdata('user',$phone_number);  
            $this->load->view('includes/header.php'); 
            $this->load->view('dashboard'); 
            $this->load->view('includes/footer.php');  
        }  
        else{  
            if($user_details->status==0){
                $data['error'] = 'Your Account status is not active yet';
            }
            else{
                $data['error'] = 'Your Account is Invalid';
            }  
            $this->load->view('includes/header.php'); 
            $this->load->view('login', $data);  
            $this->load->view('includes/footer.php'); 
        }  
    }  

    public function forget()
	{	
        $this->data['test'] = '';
        if ($this->input->get('info')) {
            $this->data['info'] = $this->input->get('info');
        }
        if ($this->input->get('error')) {
            $this->data['error'] = $this->input->get('error');
        }	
        $this->load->view('includes/header.php'); 
        $this->load->view('login-forget',$this->data);
        $this->load->view('includes/footer.php');
    }

    public function doforget()
	{
		$this->load->helper('url');
		$phone_number= $_POST['phone_number'];
		$email= $_POST['email'];
        $q = $this->db->query("select * from register where 	phone_number='" . $phone_number . "'")->result();
        if ($q) {
            $user=$q[0];
            $this->resetpassword($user);
            exit();
            $info= "Password has been reset and has been sent to email id: ". $email." and phone number: ".$phone_number;
            redirect('login/forget?info=' . $info, 'refresh');
        }
        $error= "The email id or phone number you entered not found on our database ";
        redirect('login/forget?error=' . $error, 'refresh');
    }

    private function resetpassword($user)
	{
        $method = 'http';
		$username = 'chetan.sharma@webtenor.com';
        $numbers = '+91'.$user->phone_number;
        $password= random_string('alnum', 16);
        $message = 'New password :'.$password;
        $apiKey = '22842862-2E0F-C09B-B93B-79046ADC13D0';
		$sender = '+917780950863';
		$ch = curl_init('https://api-mapper.clicksend.com/http/v2/send.php?method='.$method.'&username='.$username.'&key='.$apiKey.'&to='.$numbers.'&message='.$message.'&senderid='.$sender."'");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if(!$response){
            print_r($response);
            exit();
        }
        curl_close($ch);
        // $config = array(
        // 'mailtype'  => 'html',
        // 'charset'   => 'utf-8',
        // 'wordwrap'  => TRUE
        // );
        // $this->load->library('email');
        // $this->email->initialize($config);
        // $this->email->from('guptakamal137@gmail.com', 'Kamal Gupta');
        // $this->email->to($user->email_address); 	
        // $this->email->subject('Password reset');
        // $this->email->message('You have requested the new password, Here is you new password:'. $password);	
        // $this->email->send();
	}

    public function logout()  
    {  
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }  
  
}  
?>  