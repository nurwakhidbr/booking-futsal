<?php defined('BASEPATH') or exit('No direct script access allowed');

class Booking_Model extends CI_Model
{

    public function getDataBooking()
    {
        $query = $this->db->get('tb_booking');
        return $query->result();
    }

    public function tampil_data()
    {
        return $this->db->get('tb_booking');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_booking', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
