<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class 'Projets' : handles all requests for anything related to 'Projets' rubric
 */
class Projets extends CI_Controller {
	
	// class constructor.
	public function __construct() {
		parent::__construct();
		// loqds the database model 'DB_Projet'
		$this->load->model('DB_Projet');
	}


	/**
	 * Index  Method
	 * @param int take the id of a page as parameter
	 * @return void Return the corresponding page with the query info or redirect us to the homepage
	 * @param int Projects rubric has the id 3 in the table Rubric
	 */
	public function index ($pag_id = 3) {

		// retrieve data from query  get_projets with provided '$stag_id' parameter
		$data['page'] = $this->DB_Projet->get_projets($pag_id);
		// redirect to Homepage if return value of query is empty 
		if (empty($data['page'])) {
			show_404();
		}
		// make the title from the result query fields : rub_libelle
		$data['title'] = $data['page']['rub_libelle'];
		// build & loqd the pqge with the query result
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footerPages', $data);
	}




}
