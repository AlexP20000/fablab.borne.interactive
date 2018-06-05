<?php 
	class DB_Page extends CI_Model{

		/* Class Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->database();
			} 

		/* Function that ... */
			public function get_all_pages(){
				$query = $this->db->query('
					SELECT p.pag_id, p.pag_titre, p.pag_description, p.pag_date, p.pag_statut, p.res_id, p.rub_id, r.cmp_pseudo, t.rub_libelle
					FROM t_page_pag p, t_responsable_res r, t_rubrique_rub t
					WHERE p.res_id = r.res_id
					AND p.rub_id = t.rub_id
				');
				return $query->result_array();
			}

		/* Function that lets us to add a new page, it return the id of the page after its insert */
			public function get_responsable_id($pseudo){
				$query = $this->db->query('SELECT res_id FROM t_responsable_res WHERE cmp_pseudo = \''.$pseudo.'\'');
				$res_id = $query->result_array();
				if(!empty($res_id)){
					return $res_id[0]['res_id'];
				}
				else return null;
			}

			public function add($datas){
				/* Get the responsable id */
					$res_id = $this->get_responsable_id($datas['res_pseudo']);

				/* insert the row to the bdd if res_id is not empty */
					if(!empty($res_id)){
						$this->db->query('
							INSERT INTO t_page_pag(pag_titre, pag_description, pag_date, pag_statut, res_id, rub_id) 
							VALUES (\''.$datas['pag_titre'].'\', \''.$datas['pag_description'].'\', \''.$datas['pag_date'].'\', \''.$datas['pag_statut'].'\', '.$res_id.', '.$datas['pag_type'].')
						');
					}

				/* Get the inserted page id */
					$query = $this->db->query('SELECT MAX(pag_id) AS pag_id FROM t_page_pag');
					$result = $query->result_array();
					if(!empty($result)){
						return $result[0]['pag_id'];
					}
					return null;
			}

		/* Function that ... */
			public function get($id){
				$query = $this->db->query('
					SELECT p.pag_id, p.pag_titre, p.pag_description, p.pag_date, p.pag_statut, p.res_id, p.rub_id, r.cmp_pseudo, t.rub_libelle
					FROM t_page_pag p, t_responsable_res r, t_rubrique_rub t
					WHERE p.res_id = r.res_id
					AND p.rub_id = t.rub_id
					AND p.pag_id = '.$id.'
				');
				return $query->result_array()[0];
			}

		/* Function that ... */
			public function delete($id){
				$this->db->query('DELETE FROM t_lien_lie WHERE pag_id = '.$id.'');
				$this->db->query('DELETE FROM t_page_pag WHERE pag_id = '.$id.'');
			}

		/* Function that ... */
			public function update($datas){
				$this->db->query('
					UPDATE t_page_pag SET
						pag_titre=\''.$datas['pag_titre'].'\',
						pag_description=\''.$datas['pag_description'].'\',
						pag_date=\''.$datas['pag_date'].'\',
						pag_statut=\''.$datas['pag_statut'].'\',
						res_id=\''.$datas['res_id'].'\',
						rub_id=\''.$datas['rub_id'].'\'
					WHERE pag_id=\''.$datas['pag_id'].'\'
				');
			}

		/* function that ... */
			public function publish($id){
				$this->db->query('
					UPDATE t_page_pag SET
					pag_statut=\'Publiée\'
					WHERE pag_id=\''.$id.'\'
				');
			}

		/* function that ... */
			public function unpublish($id){
				$this->db->query('
					UPDATE t_page_pag SET
					pag_statut=\'Non publiée\'
					WHERE pag_id=\''.$id.'\'
				');
			}

		/* function that ... */
			public function get_all_link_types(){
				$query = $this->db->query('SELECT tln_id, tln_libelle FROM t_type_lien_tln WHERE tln_libelle <> \'Image\'');
				return $query->result_array();
			}

		/* function that ... */
			public function get_last_link_id(){
				$query = $this->db->query('SELECT MAX(lie_id) AS lie_id FROM t_lien_lie');
				$result = $query->result_array();

				if(!empty($result)) return $result[0]['lie_id'];
				else return 0;
			}

		/* function that ... */
			public function insert_page_links($links, $pag_id){
				//echo "<pre>"; print_r($links); echo "</pre>";

				for ($i=0; $i<count($links); $i++){
					$this->db->query('
						INSERT INTO t_lien_lie(lie_id, lie_libelle, lie_valeur, tln_id, pag_id)
						VALUES (\''.$links[$i]['link_id'].'\', \''.$links[$i]['link_label'].'\', \''.$links[$i]['link_value'].'\', \''.$links[$i]['link_type'].'\', \''.$pag_id.'\')
					');
				}
			}

	/* function that ... */
		public function get_page_links($id){
			$query = $this->db->query('
				SELECT l.lie_id, l.lie_libelle, l.lie_valeur, l.tln_id, t.tln_libelle
				FROM t_lien_lie l, t_type_lien_tln t
				WHERE l.tln_id = t.tln_id
				AND pag_id = '.$id.'
			');
			
			return $query->result_array();
		}

	/* function taht ... */
		public function delete_page_link($id){
			$this->db->query('DELETE FROM t_lien_lie WHERE lie_id = '.$id.'');
		}

		public function get_link_type_id($label){
			$query = $this->db->query('
				SELECT tln_id
				FROM t_type_lien_tln
				WHERE tln_libelle = \''.$label.'\'
			');
			$result = $query->result_array();
			if(!empty($result)){
				return $result[0]['tln_id'];
			}
			return null;
		}

		/* function that .. */
		public function get_page_image($id){
			$query = $this->db->query('
				SELECT lie_valeur
				FROM t_lien_lie
				WHERE lie_id = \''.$id.'\'
			');
			$result = $query->result_array();
			if(!empty($result)){
				return $result[0]['lie_valeur'];
			}
			return null;
		}
	}

?>