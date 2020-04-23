<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TakeCare_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->logon(); 
    }

    public
    function logon() {
         if($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {

            if (!$this -> session -> userdata('logon'))
                redirect('auth');
        }
    }

    public
    function show_login($content, $data = NULL) {

        $data['contentnya'] = $this -> load  -> view($content, $data, TRUE);

        $this -> load -> view('template/login/index', $data);
    }

    public
    function show_register($content, $data = NULL) {

        $data['contentnya'] = $this -> load -> view($content, $data, TRUE);

        $this -> load -> view('template/register/index', $data);
    }

    public
    function show_home() {

        $this -> load -> view('index');
    }

    public
    function show_template($content, $data = NULL) {

        $data['headernya'] = $this -> load -> view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this -> load -> view($content, $data, TRUE);

        $this -> load -> view('template/backend/index', $data);
    }
}