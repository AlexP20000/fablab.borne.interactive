<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ue extends CI_Controller {

	// method displaying the content page
	public function index ($page = 'ue') {
		// check the existence of the page
		if (!file_exists(APPPATH."views/".$page.".php")) {
			show_404();
		}
		// set the title of the page to the page name
		$data['title'] = ucfirst($page);

		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/'.$page, $data);
		$this->load->view('front_office/inc/footer', $data);
	}




}
