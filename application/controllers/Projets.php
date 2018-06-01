<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projets extends CI_Controller {

	/**
	 * Projets constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('projet_model');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 */
	public function index ($page_id = 1) {

		$data['projet'] = $this->projet_model->get_projets($page_id);

		if (empty($data['projet'])) {
			show_404();
			redirect('home');
		}
		$data['title'] = $data['projet']['rub_libelle'];
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footer', $data);
	}




}
