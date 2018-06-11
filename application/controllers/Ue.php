<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ue extends CI_Controller {
	/**
	 * Stages constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('DB_Ue');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page / l'ID 5 correspond à l'ID de la rubrique UE
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 */
	public function index ($ue_id = 5) {

		$data['page'] = $this->DB_Ue->get_ues($ue_id);

		if (empty($data['page'])) {
			// show_404();
			redirect(base_url()/Home);
		}
		$data['title'] = $data['page']['rub_libelle'];
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footer', $data);
	}


}
