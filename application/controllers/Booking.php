<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_Model', 'Booking');
    }

    public function index()
    {
        // redirect to data
        redirect('booking/data');
    }

    public function data()
    {
        $data['title'] = 'Data Booking';
        $data['bookings'] = $this->Booking->getDataBooking();
        // var_dump($data);
        return view('_operator.booking.data', $data);
    }
}