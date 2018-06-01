<?php
/**
 * Created by PhpStorm.
 * User: alioum
 * Date: 27/05/2018
 * Time: 16:00
 */

class  Projet_Model extends CI_Model {

	/**
	 * Projet_Model constructor.
	 */
	public function __construct() {
			parent::__construct();
			$this->load->database();
	}

	/**
	 * GET_PROJETS METHOD
	 * @param bool $pag_id
	 * @return array of values from table t_pages_pag where id = rubrique.id
	 */
	public function get_projets($pag_id = FALSE) {

			if ($pag_id === FALSE) {
				$this->db->select();
				//$this->db->select('rub_libelle');
				$this->db->from('t_rubrique_rub, t_page_pag');
				$this->db->where(array('rub_libelle' => "projets"));
				//$this->db->where(array('rub_id' => 4));
				$query_projets = $this->db->get();
				// return result under an array
				return $query_projets->result_array();
			}
		// get the posts where $slug is present
		$this->db->select();
		$this->db->from('t_rubrique_rub, t_page_pag');
		$this->db->where(array( 'pag_id' => $pag_id));
		$query_projets = $this->db->get();
		return $query_projets->row_array();
	}

	/**
	 * GET_CATEGORY METHOD
	 * @param void No parameter needed here / (for the moment)
	 * @return array containing the different categories available in the table t_rubrique_rub
	 */
	public function get_category() {
		$this->db->order_by('rub_libelle');
		$query_category = $this->db->get('t_rubrique_rub');

		return $query_category->result_array();
	}

}

