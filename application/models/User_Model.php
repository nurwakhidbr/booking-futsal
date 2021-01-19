<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('users');
    }
}
