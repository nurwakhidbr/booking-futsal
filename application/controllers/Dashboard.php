<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        redirect('dashboard/op');
    }
    
    public function op()
    {
        return view('_operator.dashboard');
    }
    
    public function adm()
    {
        // ini halaman admin
        return view('_admin.dashboard');
    }
}