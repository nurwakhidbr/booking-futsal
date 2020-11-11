<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    public function index()
    {
        // redirect to data
        echo "booking.index";
    }

    public function data()
    {
        return view('booking/data');
    }
}