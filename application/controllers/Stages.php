<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stages extends CI_Controller {

	/**
	 * Stages constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DB_Stages');
	}


	/**
	 * INDEX  Method
	 * @param int Prend en paramètre le page_id d'une page
	 * @return void Retourne la page correspondante à la vue sinon nous renvoi sur la page d'accueil
	 */
	public function index ($stg_id = 1) {

		$data['stages'] = $this->db_stage->get_stages($stg_id);

		if (empty($data['stages'])) {
			// show_404();
			redirect('home');
		}
		$data['title'] = $data['stages']['rub_libelle'];
		$this->load->view('front_office/inc/headerPages', $data);
		$this->load->view('front_office/page', $data);
		$this->load->view('front_office/inc/footer', $data);
	}


}
