<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
  $this->load->database();
  $this->load->helper('url');
 }
 public function index1()
 {
  if(($this->session->userdata('username')!=""))
  {
       $this->welcome();
  }
  else{
   $data['title']= 'Log in';
   $this->load->view('header_view',$data);
   $this->load->view("login_view.php", $data);
   $this->load->view('footer_view',$data);
  }
 }
 public function welcome()
 {
  if(($this->session->userdata('username')==""))
    {
         $data['title']= 'Log in';
         $this->load->view('header_view',$data);
         $this->load->view("login_view.php", $data);
         $this->load->view('footer_view',$data);
    }else if(($this->session->userdata('username')=="admin")){
        $this->welcome1();
    }else{
      $data['title']= 'Welcome';
      $this->load->view('header_view',$data);
      $this->load->view('welcome_view.php', $data);
      $this->load->view('footer_view',$data);
    }
 }

 public function welcome1()
 {
  if(($this->session->userdata('username')==""))
    {
         $data['title']= 'Log in';
         $this->load->view('header_view',$data);
         $this->load->view("login_view.php", $data);
         $this->load->view('footer_view',$data);
    }else{
      $data['title']= 'Welcome';
      $this->load->view('header_view',$data);
      $this->load->view('welcome_view1.php', $data);
      $this->load->view('footer_view',$data);
    }
 }
 public function login()
 {
  $email=$this->input->post('email');
  $password=md5($this->input->post('pass'));

  $result=$this->user_model->login($email,$password);
  if($result){
      if($this->input->post('email')!="admin@admin.com"){
        $this->welcome();
      }else{
        $this->welcome1();
      }
  }else{
      $this->index1(); 
    } 
 }
 public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('header_view',$data);
  $this->load->view('thank_view.php', $data);
  $this->load->view('footer_view',$data);
 }
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index1();
  }
  else
  {
   $this->user_model->add_user();
   $this->thank();
  }
 }
 public function logout()
 {
  $newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  $this->index1();
 }

public function indexx()
  { 
    if(($this->session->userdata('username')==""))
    {
         $data['title']= 'Log in';
       $this->load->view('header_view',$data);
       $this->load->view("login_view.php", $data);
       $this->load->view('footer_view',$data);
    }else{
      $data['title']= 'Message form';
    $this->load->model("user_model");
    $data['query']=$this->user_model->get_all();
    $this->load->view('header_view',$data);
    $this->load->view('messageform_view',$data);
    $this->load->view('footer_view',$data);
    }
    
  }
  public function insert_message()
  {
    $this->load->model('user_model');
    $this->user_model->add_message();
    $this->load->helper('url');
    redirect("/user/indexx");
  }

  public function index()
  {
    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('footer');
  }

  public function price()
  {
    $this->load->view('menu');
    $this->load->view('contentprice');
    $this->load->view('footer');
  }

  public function facility()
  {
    $this->load->view('menu');
    $this->load->view('contentfacility');
    $this->load->view('footer');
  }

  public function viewregist()
  {
    $this->load->view('header_view');
    $this->load->view('registration_view.php');
    $this->load->view('footer_view');
  }

  function show_student_id() {
    if(($this->session->userdata('username')=="")){
         $data['title']= 'Log in';
         $this->load->view('header_view',$data);
         $this->load->view('login_view.php', $data);
         $this->load->view('footer_view',$data);
    }else if(($this->session->userdata('username')!="admin")){
         $this->welcome();
    }else{
        $id = $this->uri->segment(3);
        $data['students'] = $this->user_model->show_students();
        $data['single_student'] = $this->user_model->show_student_id($id);
        $this->load->view('header_view',$data);
        $this->load->view('delete_view', $data);
        $this->load->view('footer_view',$data);
    } 
  }
  
//function to Delete selected record from database
function delete_student_id() {
        $id = $this->uri->segment(3);
        $this->user_model->delete_student_id($id);
         $this->show_student_id();
    }
}
?>