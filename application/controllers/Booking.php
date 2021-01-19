<?php defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_Model');
        is_logged_in();
    }

    public function index()
    {
        // redirect to data
        redirect('booking/data');
    }

    public function data()
    {
        $data['title'] = 'Data Booking';
        $data['booking'] = $this->Booking_Model->tampil_data()->result();
        $data['booking'] = $this->Booking_Model->getDataBooking();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('users', ['role_id' => 3])->result();
        $data['field'] = $this->db->get('tb_lapangan')->result();
        // var_dump($data);
        // return view('_operator.booking.data', $data);
        $this->template->load('layouts/main', '_operator/booking/data', $data);
    }

    public function add()
    {
        $pemesan = $this->input->post('name');
        $lapangan = $this->input->post('nama_lapangan');
        $nama_tim    = $this->input->post('nama_tim');
        $tgl         = $this->input->post('tgl');
        $jam_mulai   = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');

        $data = array(
            'id_user' => $pemesan,
            'id_lapangan' => $lapangan,
            'id_harga' => 1,
            'nama_tim' => $nama_tim,
            'tgl' => $tgl,
            'jam_mulai' => $jam_mulai,
            'jam_selesai' => $jam_selesai,
        );

        $this->Booking_Model->input_data($data, 'tb_booking');
        redirect('booking/data');
    }

    public function hapus($id_booking)
    {
        $where = array('id_booking' => $id_booking);
        $this->Booking_Model->hapus_data($where, 'tb_booking');
        redirect('booking/data');
    }
}
