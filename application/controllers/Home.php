<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
            } catch (FacebookApiException $e) {
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
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
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

    public function index($page = 'home')
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

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
    public function thank($page = 'thank')
    {
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
    public function registration()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $this->user_model->add_user();
            $this->thank();
        }
    }

}

