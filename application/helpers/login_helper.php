<?php 
function check_session()
{
	$sess = & get_instance();
	$session = $sess->session->userdata('status_login');
	if ($session!='aktif') {
		redirect('auth/login');
	}
}



function remember()
{
	$sess = & get_instance();
	$session = $sess->session->userdata('status_login');
	if ($session=='aktif') {
		redirect('dashboard');
	}
}

?>