<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Class 'Actualites' : handles all requests for anything related to 'Projets' rubric
 **/
class Actualites extends CI_Controller {
	
	// class 'Stages' constructor.
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Actualites');
	}


	/**
	 * Index  Method
	 * @param int take the id of a page as parameter
	 * @return void Return the corresponding page with the query info or redirect us to the homepage
	 * @param int 'Actualites' rubric has the id 1 in the table Rubric
	 */
	public function index ($act_id = 1) {

		// retrieve data from query  get_actualites with provided '$act_id' parameter
		$data['page'] = $this->DB_Actualites->get_actualites($act_id);
		// redirect to Homepage if return value of query is empty 
		if (empty($data['page'])) {
			show_404();
		}
		// make the title from the result query fields : rub_libelle
		$data['title'] = $data['page']['rub_libelle'];
		// build & load the page with the result query 
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footerPages', $data);
	}


}
