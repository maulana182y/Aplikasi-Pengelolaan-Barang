<?php
function is_logg_in(){
	// memanggil library CI
	$ci = get_instance();

	// melakukan pencegahan user masuk tanpa login 
	if(!$ci->session->userdata('username')) {
		redirect('auth');
	} else {
		// melakukan penyesuaian menu yang dapat diakses berdasarkan role 
		$role_id = $ci->session->userdata('role');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);
		// jika mengakses menu yang tidak sesuai maka kita kembalikan
		if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
	}
}

function check_access($role_id, $menu_id) {
	$ci = get_instance();

	$ci->db->where('role_id', $role_id);
	$ci->db->where('menu_id', $menu_id);

	$result = $ci->db->get('user_access_menu');

	if($result->num_rows() > 0) {
		return "checked='checked'"; 
	}

}