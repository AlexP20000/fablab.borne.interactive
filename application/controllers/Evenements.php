<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Class 'Evenements' : handles all requests for anything related to 'Projets' rubric
 **/
class Evenements extends CI_Controller {

	// Stages constructor.
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Evenements');
	}


	/**
	 * Index  Method
	 * @param int take the id of a page as parameter
	 * @return void Return the corresponding page with the query info or redirect us to the homepage
	 * @param int 'Evenements' rubric has the id 2 in the table 'Rubric'
	 */
	public function index ($even_id = 2) {

		// retrieve data from query  'get_evenements' with provided '$even_id' as parameter
		$data['page'] = $this->DB_Evenements->get_evenements($even_id);
		// redirect to Homepage if return value of query is empty 
		if (empty($data['page'])) {
			redirect(home/index);
		}
		// make the title from the result query fields : rub_libelle
		$data['title'] = $data['page']['rub_libelle'];
		// build & loqd the pqge with the query result
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footerPages', $data);
	}


}
