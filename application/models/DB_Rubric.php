<?php 
	class DB_Rubric extends CI_Model{
		/* Class Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->database();
			} 

		/* Function that ... */ 
			public function get_all_types(){
				$query = $this->db->query('SELECT rub_id, rub_libelle, rub_description FROM t_rubrique_rub');
				return $query->result_array();
			}

			public function get_all_link_types(){
				$query = $this->db->query('SELECT tln_id, tln_libelle FROM t_type_lien_tln');
				return $query->result_array();
			}

		/* Function that ... */
			public function add($datas){
				$this->db->query('
					INSERT INTO t_rubrique_rub(rub_libelle, rub_description) VALUES (\''.$datas['label'].'\',\''.$datas['description'].'\')
				');
			}
		/* Function that ... */
			public function delete($id){
				$this->db->query('
					DELETE FROM t_rubrique_rub WHERE rub_id = '.$id.'
				');
			}

	}
?>