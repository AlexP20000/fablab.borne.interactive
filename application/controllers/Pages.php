<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 * @param void : doesn't take any parameter
 * @return 'index' page of application OpenMag
 * @author  Aliou M DIALLO
 */
class Home extends CI_Controller {

    public function index ($page = 'pages') {
        // check the existance of the page, name of page in parameter
        if (!file_exists(APPPATH."views/".$page.".php")) {
            show_404();
        }
        // set the title of the page to the page name
        $data['title'] = ucfirst($page);

		// display the content of the page
        $this->load->view('front_office/inc/headerPages', $data);
        $this->load->view('front_office/'.$page, $data);
        $this->load->view('front_office/inc/footerPages', $data);
    }




}
