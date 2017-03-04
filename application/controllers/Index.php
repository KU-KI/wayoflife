<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      class Index extends CI_Controller {

          public function __construct(){
              parent::__construct();
              $this->load->helper('url');
              $this->load->model('user_model');
          }

          public function login_fb(){

              $this->load->library('facebook');

              $user = $this->facebook->getUser();

              if ($user) {
                  try {
                      $data['user_profile'] = $this->facebook->api('/me');
                  }
                  catch (FacebookApiException $e) {
                      $user = null;
                  }
              }else {

              }

              if ($user) {

                  $data['logout_url'] = site_url('home/logout');

              } else {
                  $data['login_url'] = $this->facebook->getLoginUrl(array(
                      'redirect_uri' => site_url('home/welcome'),
                      'scope' => array("email")
                  ));
              }
              $this->load->view('login',$data);

          }
          public function welcome($page = 'welcome')
          {
              $this->load->library('facebook');

              $user = $this->facebook->getUser();

              if ($user) {
                  try {
                      $data['user_profile'] = $this->facebook->api('/me');
                  }
                  catch (FacebookApiException $e) {
                      $user = null;
                  }
              }else {

              }

              if ($user) {

                  $data['logout_url'] = site_url('home/logout');

              } else {
                  $data['login_url'] = $this->facebook->getLoginUrl(array(
                      'redirect_uri' => site_url('home/welcome'),
                      'scope' => array("email")
                  ));
              }

              $data['title'] = ucfirst($page);

              $this->load->view('pages/'.$page, $data);

          }
          public function login()
          {
              $email=$this->input->post('email');
              $password=md5($this->input->post('pass'));

              $result=$this->user_model->login($email,$password);
              if($result) $this->welcome();
              else        $this->index();
          }
          public function logout(){

              $this->load->library('facebook');

              $this->facebook->destroySession();

              $newdata = array(
              'user_id'   =>'',
              'user_name'  =>'',
              'user_email'     => '',
              'logged_in' => FALSE,
              );
              $this->session->unset_userdata($newdata );
              $this->session->sess_destroy();

              redirect('');
          }

          public function index($page = 'index'){
              $this->load->library('facebook');
              $user = $this->facebook->getUser();

              if ($user) {
                  try {
                      $data['user_profile'] = $this->facebook->api('/me');
                  }
                  catch (FacebookApiException $e) {
                      $user = null;
                  }
              }else {

              }

              if ($user) {

                  $data['logout_url'] = site_url('home/logout');

              } else {
                  $data['login_url'] = $this->facebook->getLoginUrl(array(
                      'redirect_uri' => site_url('home/welcome'),
                      'scope' => array("email")
                  ));
              }

              if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
              {
                  show_404();
              }

              $data['title'] = ucfirst($page);

              $this->load->view('templates/header', $data);
              $this->load->view('pages/'.$page, $data);
              $this->load->view('templates/footer', $data);

          }
      }

