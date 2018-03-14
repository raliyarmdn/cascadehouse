<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function login($email,$password)
    {
        $this->db->where("email",$email);
        $this->db->where("password",$password);

        $query=$this->db->get("users");
        if($query->num_rows()>0)
        {
            foreach($query->result() as $rows)
            {
                //add all data to session
                $newdata = array(
                    'user_id'     => $rows->id,
                    'username'    => $rows->username,
                    'user_email'  => $rows->email,
                    'logged_in'   => TRUE,
                );
            }
            
            $this->session->set_userdata($newdata);
            return true;
        }
        
        return false;
    }
    
    public function add_user()
    {
        $data=array(
            'username'  =>$this->input->post('user_name'),
            'email'     =>$this->input->post('email_address'),
            'password'  =>md5($this->input->post('password'))
        );
        $this->db->insert('users',$data);
    }
    
    public function add_avatar()
    {
        
        
    }
    
    public function load_posts($user_id)
    {
        $this->db->where("user_id",$user_id);
        
        $query=$this->db->get('posts');
        if ($query->num_rows()>0)
        {
            foreach($query->result() as $rows)
            {
                $haha = array(
                    'post_id'   => $rows->id,
                    'title'     => $rows->title,
                    'artist'    => $rows->artist,
                    'album'     => $rows->album,
                    'caption'   => $rows->caption,
                );
            }   
            return $haha;
        }
        return array();
    }

    public function add_message()
    {
        
        $data=array(
            'name'=>$_POST['name'],
            'message'=>$_POST['message']
            );
        $this->db->insert('message',$data);
    }
    public function get_all()
    {
        $query=$this->db->get('message');
        return $query->result();
    }

    //function to select all from table name students
    function show_students(){
    $query = $this->db->get('message');
    $query_result = $query->result();
    return $query_result;
    }

    //function to select particular record from table name students 
    function show_student_id($data){
            $this->db->select('*');
            $this->db->from('message');
            $this->db->where('id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;  
        }

    //function to Delete selected record from table name students   
    function delete_student_id($id){
            $this->db->where('id', $id);
            $this->db->delete('message');   
        }
     
    }

?>