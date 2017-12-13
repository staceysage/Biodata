<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        //load model
        $this->load->model('home_model');
    }
        
    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url'); 
        //get data from the database
        $data['person'] = $this->home_model->get_person();
        
        //load view and pass the data
        $this->load->view('home_view', $data);
    }
    public function login()
    {
        $this->load->library('session');
        $this->load->helper('url'); 
        $data['user'] = $this->home_model->get_user();
        
        //load view and pass the data
        $this->load->view('login_view', $data);
    }
    public function unset_session() 
    {
        $this->load->library('session');

        $this->load->unset_userdata('npm');
        $this->load->view('session_view');
    }
}