<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evenements extends CI_Controller {
	/**
	 * Stages constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Evenements');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 * @param int L'ID dans la table Rubrique pour les evenements est : 2
	 */
	public function index ($even_id = 2) {

		$data['page'] = $this->DB_Evenements->get_evenements($even_id);

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
