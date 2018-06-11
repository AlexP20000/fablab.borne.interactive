<?php
/**
 * Created by Visual Studio Code
 * User: alioum
 * Date: 27/05/2018
 * Time: 16:00
 */

class  DB_Stage extends CI_Model {

	/**
	 * DB_Stage constructor.
	 */
	public function __construct() {
			parent::__construct();
			$this->load->database();
	}

	/**
	 * GET_STAGES METHOD
	 * @param bool $pag_id
	 * @return array of values from table t_pages_pag where id = rubrique.id
	 */
	public function get_stages($stag_id = FALSE) {

			if ($stag_id === FALSE) {
				$this->db->select();
				//$this->db->select('rub_libelle');
				$this->db->from('t_rubrique_rub,t_page_pag');
				$this->db->where(array('rub_libelle' => "stage"));
				//$this->db->where(array('rub_id' => 4));
				$query_stages = $this->db->get();
				// return result under an array
				return $query_stages->result_array();
			}
		// get the posts where $slug is present
		$this->db->select();
		$this->db->from('t_rubrique_rub,t_page_pag');
		$this->db->where(array( 'pag_id' => $stag_id));
		$query_stages = $this->db->get();
		return $query_stages->row_array();
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

