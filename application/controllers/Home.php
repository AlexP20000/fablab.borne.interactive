<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // method displaying the home page
    public function index ($page = 'home') {
        // check the existance of the page
        if (!file_exists(APPPATH.'views/front_office/'.$page.'.php')) {
            show_404();
        }
        // set the title of the page to the page name
        $data['title'] = ucfirst($page);

        $this->load->view('front_office/inc/headerHome', $data);
        $this->load->view('front_office/'.$page, $data);
        $this->load->view('front_office/inc/footer');
    }

	/**
	 * GET_PROJETS Method
	 */
	public function posts() {

    	$url_title  = url_title('title', 'Home');

    	$data['projet'] = $this->projet_model->get_projets();
    	if (empty($data['projet'])) {
    		show_404();
		}

		$data["title"] = 'Projets';
    	$this->load->view('front_office/inc/headerPages', $data);
    	$this->load->view('front_office/pages', $data);
    	$this->load->view('front_office/inc/footer', $data);
	}



}
