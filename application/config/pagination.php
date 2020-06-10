<?php

//Config
		$config['base_url'] = base_url().'datamedispengujian/index';
		$config['num_links'] = 3;

		//styling paginationnya untuk membungkus framework bootstrap di dalam controller ci di dalam file admin.php (mempercantik tampilan pagination)
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		//First and Last untuk mempercantik pagination
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		//pagination next tetapi menggunakan Hmtlspecialchars right arrow quitesion 
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		//pagination next tetapi menggunakan Hmtlspecialchars left arrow quitesion 
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		//current pagination untuk menentukan kita ada di halaman atau pagination nomer berapa dengan tanda active
		$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		//untuk pagination digit jumlah halaman misal 1,2,3 dst
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		//class pada pagination bootstrap
		$config['attributes'] = array('class' => 'page-link');
