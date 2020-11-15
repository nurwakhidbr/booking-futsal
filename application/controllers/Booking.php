<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    public function index()
    {
        // redirect to data
        redirect('booking/data');
    }

    public function data()
    {
        $data['title'] = 'Data Booking';
        return view('_operator.booking.data', $data);
    }
}