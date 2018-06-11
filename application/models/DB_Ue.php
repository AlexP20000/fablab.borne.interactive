<?php
/**
 * Created on Visual Studio Code
 * User: alioum
 * Date: 27/05/2018
 * Time: 16:00
 */

class  DB_Ue extends CI_Model {
	/**
	 * Projet_Model constructor.
	 */
	public function __construct() {
			parent::__construct();
			$this->load->database();
	}

	/**
	 * GET_ACTUALITES METHOD
	 * @param bool $act_id
	 * @return array of values from table t_pages_pag where id = rubrique.id
	 */
	public function get_ues($ue_id = FALSE) {

			if ($act_id === FALSE) {
				$this->db->select();
				$this->db->from('t_rubrique_rub, t_page_pag');
				$this->db->where(array('rub_libelle' => "ue"));
				$query_actualites = $this->db->get();
				// return result under an array
				return $query_actualites->result_array();
			}
		// get the posts where $slug is present
		$this->db->select();
		$this->db->from('t_rubrique_rub, t_page_pag');
		$this->db->where(array( 'pag_id' => $ue_id));
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

