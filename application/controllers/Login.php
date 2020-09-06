<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('email_helper');
        $this->load->library('session');
        $this->load->library('form_validation');
       
        
       
    }

    public function index()
    {
        /*$view_data = '';
        $language_id = ($this->session->userdata('site_lang') == 'english') ? '301' : '302';
        $data = array(
            'title' => $this->lang->line('home_page_title'),
        );*/
        $this->load->view('base/header');
        $this->load->view('master/login');
        $this->load->view('base/footer');
    }
    public function login_process() {

           $e=$this->input->post('email');
            $p=$this->input->post('password');
            $pa=md5($p);
    
            $query=$this->db->query("select * from users where (mobile='$e' or email='$e') and passwd='$pa'");
        if($query->num_rows()==1)
        {
            $row=$query->row();
            
                $user_data = array( 
                'user_id'      =>$row->user_id,
                'first_name'  => $row->first_name,
                'last_name'  => $row->last_name,
                'username'    => $row->username,
                'email'       => $row->email,
                'passwd'      => $row->passwd,
                'mobile'      => $row->mobile,
                'auth_level'  => $row->auth_level,
                'logged_in'   => TRUE
);  

            $this->session->set_userdata($user_data);
                                
            echo "<script>
       
      window.history.go(-2);
       </script>";

        }
        else{
            $this->session->set_flashdata('login-error','* Invaild Username and Password');
            redirect('login');
        }
}
    public function register()
    {
       // $this->load->view('base/header');
        $this->load->view('master/register');
       // $this->load->view('base/footer');
    }
    public function login()
    {
       // $this->load->view('base/header');
        $this->load->view('master/login');
       // $this->load->view('base/footer');
    }
    public function register_process()
    {
       
        if (isset($_POST['submit'])) {

            //$this->require_min_level(1);
            $user_id= str_pad(mt_rand(0, 9999), 10, '0', STR_PAD_LEFT);
            $first_name = $this->input->post('first_name');            
            $last_name = $this->input->post('last_name');            
            $email = $this->input->post('email');    

            $mobile = $this->input->post('mobile');          
               $password = $this->input->post('password');
               $pass = md5($password);   
            $otp=str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);


          
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $check_email=$this->mcommon->specific_row('users',array('email'=>$email));

            $check_mobile=$this->mcommon->specific_row('users',array('mobile'=>$mobile));

            if ($this->form_validation->run() == true) { 
                 if($check_email=='')
                 {
                     if($check_mobile=='')
                 {
            $user_data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                
                'username' => $email,
                'user_id'=>$user_id,
                'email' => $email,
                'mobile' => $mobile,
                'passwd' => $pass,
                'auth_level'=>'2',
                
                            ];

                    $insert1 = $this->mcommon->common_insert('users', $user_data);
                   
                     $this->session->set_userdata($user_data);
                    //echo $this->db->last_query();die();
                    
                         $otp_insert=array(
                        'otp'=>$otp,
                        'user_id'=>$user_id,
                        'status'=>'0'

                    );
                        $insert = $this->mcommon->common_insert('otp', $otp_insert);
                        if($insert > 0)
                        {
                        /*$url = "https://api.smsglobal.com/http-api.php?action=sendsms&user=zst53arz&password=E0o7rcok&from=care4you&to=+971$mobile&text=$otp";




                    $ch = curl_init(); 
                    curl_setopt($ch, CURLOPT_URL,$url); 
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $output = curl_exec($ch);
                    curl_close($ch);
                   */
$this->db->select("*");
        $this->db->from("users");
        $this->db->where("email",$email);
        $result=$this->db->get()->result();
                      
                     // $msg = $this->load->view('base/register_email', $customer_details1, true);
                      $this->load->library('email');

foreach($result as $row)
      {
$cust_id=$row->user_id;
$useremail=$row->email;
      }

 


           $user_data['password']=$password;
          
            $user_data['username']=$useremail;
            $msg=$this->load->view('base/register_email',$user_data,true);
                            $config['protocol'] = 'smtp';
                            $config['smtp_host'] = 'smtp-relay.sendinblue.com';
                            $config['smtp_port'] = '587';
                            $config['smtp_timeout'] = '7';
                            $config['smtp_user'] = 'majesticprojects20@gmail.com';
                        $config['smtp_pass'] = 'pyCwGWT7V4kfJDBa';
                            $config['charset'] = 'utf-8';
                            $config['newline'] = "\r\n";
                            $config['mailtype'] = 'html'; // or html
                            $config['validation'] = true; // bool whether to validate email or not
                            $this->email->initialize($config);
                            $this->email->from('info@care4you.ae', 'care4you');
                            $this->email->to($email);
                            $this->email->subject('Register Conformation');
                            $this->email->message($msg);
                            $mail_status = $this->email->send();
                            redirect('home');
    //$customer_detail['default']=$this->mcommon->get_users($user_id);                         

                    
                }


                 
                }  
                else{
           $this->session->set_flashdata('check_mobile_alert_danger', 'Already used this mobile number. Please try another mobile number');
        }     

            // Load resources
        }
        else{
           $this->session->set_flashdata('check_email_alert_danger', 'Already used this email. Please try another email');
        }  

         }


        }

        // $this->setup_login_form();

        $view_data = '';
        $data = array(
            'title' => $this->lang->line('login_page_title'),
        );
        /*$data['link'] = $this->facebook->login_url();*/
        $this->load->view('base/register_template', $data);
    }
  public function logout() {

        $this->session->unset_userdata('user_id');
        echo "<script>
       
      window.history.go(-2);
       </script>";
    }
   
}