<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('url');
	}

	public function login(){

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
                'redirect_uri' => site_url('home/login'),
                'scope' => array("email")
            ));
        }
        $this->load->view('login',$data);

	}

    public function logout(){

        $this->load->library('facebook');

        $this->facebook->destroySession();

        redirect('home/login');
    }

    public function index($page = 'home'){

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);


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
                'redirect_uri' => site_url('home/login'),
                'scope' => array("email")
            ));
        }

    }

}

