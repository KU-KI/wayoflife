<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      class Register extends CI_Controller {

          public function __construct(){
              parent::__construct();
              $this->load->helper('url');
              $this->load->model('user_model');
          }

          public function successfully($page = 'successfully'){
              $data['title'] = ucfirst($page);
              $this->load->view('templates/header', $data);
              $this->load->view('pages/'.$page, $data);
              $this->load->view('templates/footer', $data);
          }

          public function index(){
              $this->load->library('form_validation');
              $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
              $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
              $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

              if($this->form_validation->run() == FALSE){
                  $this->index();
              }else{
                  $this->user_model->add_user();
                  $this->successfully();
              }
          }
      }

