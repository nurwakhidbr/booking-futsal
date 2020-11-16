<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_Model extends CI_Model {

    public function getDataBooking()
    {
        $query = $this->db->get('tb_booking');
        return $query->result();
    }

}