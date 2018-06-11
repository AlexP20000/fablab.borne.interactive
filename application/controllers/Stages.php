<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stages extends CI_Controller {
	/**
	 * Stages constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Stage');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 */
	public function index ($stag_id = 4) {

		$data['page'] = $this->DB_Stage->get_stages($stag_id);

		if (empty($data['page'])) {
			// show_404();
			redirect(Home);
		}
		$data['title'] = $data['page']['rub_libelle'];
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footer', $data);
	}


}
