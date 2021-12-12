<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function view($page = 'home'){
		if (!file_exists(APPPATH.'views/pages/' .$page . '.php')){
			show_404(); // 404 Page
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('pages/' . $page);
		$this->load->view('templates/footer');
	}
}
