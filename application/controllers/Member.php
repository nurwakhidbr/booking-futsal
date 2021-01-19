<?php defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_Model');
    }

    public function index()
    {
        // redirect to data
        redirect('member/data');
    }

    public function data()
    {
        $data['title'] = 'Data Member';
        $data['member'] = $this->Member_Model->tampil_data()->result();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // return view('_operator.booking.data', $data);
        $this->template->load('layouts/main', '_operator/member/data', $data);
    }

    public function add()
    {
        $name     = $this->input->post('name');
        $jk       = $this->input->post('jk');
        $alamat   = $this->input->post('alamat');
        $nama_tim = $this->input->post('nama_tim');
        $kontak   = $this->input->post('kontak');
        $ktp      = $this->input->post('ktp');

        $data = array(
            'name' => $name,
            'jk' => $jk,
            'alamat' => $alamat,
            'nama_tim' => $nama_tim,
            'kontak' => $kontak,
            'ktp' => $ktp,
        );

        $this->Member_Model->input_data($data, 'tb_member');
        redirect('member/data');
    }
}
