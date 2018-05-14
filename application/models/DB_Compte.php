<?php 
	class DB_Compte extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function connect($username, $password){
			$query = $this->db->query('
				SELECT r.res_nom, r.res_prenom, c.cmp_pseudo, c.cmp_mot_de_passe
	  		FROM t_responsable_res r, t_compte_cmp c
	  		WHERE r.cmp_pseudo = \''.$username.'\'
	  		AND c.cmp_pseudo = \''.$username.'\'
	  		AND c.cmp_mot_de_passe = \''.$password.'\'
				AND c.cmp_statut = \'Actif\'
			');

			if(count($query->result_array()) == 1) {
				return $query->result_array()[0];
			}
			else return 0;

		}
	}

?>