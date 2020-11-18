<?php 

function auth_logged()
{
    // helper buat mengecek authentication pada semua user
    $ci =& get_instance();
    $user_session = $ci->session->userdata('email');
    if ($user_session) {
        // redirect('dashboard');
        echo "<script>window.history.back();</script>";
    }
}

function not_logged()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('email');
    if (!$user_session) {
        // redirect('auth');
        echo "<script>window.history.back();</script>";
    }
}

function idr($idr) {
	$idr = "Rp. ".number_format($idr,0,',','.');
	return $idr;
}

function count_student()
{
    // load student number
    $ci =& get_instance();
    $query = $ci->db->get('students');
    return $query->num_rows();
}
