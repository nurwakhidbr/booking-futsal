<?php defined('BASEPATH') or exit('No direct script access allowed');

class Member_Model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_member');
    }

    public function input_data($data, $id)
    {
        $this->db->insert('tb_member', $data);

        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->join('users', 'users.id = tb_member.id_user');
        $this->db->where('tb_member.id_member', $id);
        return $this->db->get()->row();
    }
}
