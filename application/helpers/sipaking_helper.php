<?php

function is_logged_in()
{
	//panggil instansiasi CI
	$ci= get_instance();
	//cek login
	if(!$ci->session->userdata('email')){
		redirect('auth/blocked');
	}
	
}