<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      class User_model extends CI_Model {
          public function __construct()
          {
              parent::__construct();
          }
          function login($email,$password)
          {
              $this->db->where("email",$email);
              $this->db->where("password",$password);

              $query=$this->db->get("user");
              if($query->num_rows()>0)
              {
                  foreach($query->result() as $rows)
                  {
                      //add all data to session
                      $newdata = array(
                        'user_id'  => $rows->id,
                        'user_name'  => $rows->username,
                        'user_email'    => $rows->email,
                        'logged_in'  => TRUE,
                      );
                  }
                  $this->session->set_userdata($newdata);
                  return true;
              }else{
                  echo '<div style="position:absolute; top:0; width:100%; line-height:50px; background:rgba(192, 57, 43,1.0); padding:0 50px;" >Nezadal si spravne ú daje alebo nie si registrovany!</div>';
                  return false;
              }
          }
          public function add_user()
          {
              $data=array(
                'username'=>$this->input->post('user_name'),
                'email'=>$this->input->post('email_address'),
                'password'=>md5($this->input->post('password'))
              );
              $this->db->insert('user',$data);
          }
      }
?>
