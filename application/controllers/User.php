<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function index()
    {
        redirect('user/data');
    }

    public function data()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->User_Model->tampil_data()->result();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // return view('_operator.booking.data', $data);
        $this->template->load('layouts/main', '_operator/user/data', $data);
    }
}
