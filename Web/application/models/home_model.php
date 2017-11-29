<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_person()
    {
        $query = $this->db->get('person');
        
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    public function get_user()
    {
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    function user_insert(){
        $npm=$this->input->post('npm');
        $nama=$this->input->post('nama');
        $pass=$this->input->post('pass');
        $data = array(
            'npm'=>$npm,
            'nama'=>$nama,
            'pass'=>$pass
        );

        $this->db->insert('user',$data);
    }
}