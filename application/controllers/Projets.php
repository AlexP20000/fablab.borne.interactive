<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projets extends CI_Controller {

	/**
	 * class Projets constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Projet');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 * @param int L'ID dans la table Rubrique pour les projets est : 3
	 */
	public function index ($pag_id = 3) {

		$data['page'] = $this->DB_Projet->get_projets($pag_id);

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
