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
        $this->load->helper('url'); 
        //get data from the database
        $data['person'] = $this->home_model->get_person();
        
        //load view and pass the data
        $this->load->view('home_view', $data);
    }
    public function login()
    {
        $this->load->helper('url'); 
        
        //load view and pass the data
        $this->load->view('login_view');
    }
}