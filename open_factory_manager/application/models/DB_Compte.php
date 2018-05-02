<?php 
	class DB_Compte extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function connect($username, $password){
			$query = $this->db->query('
				SELECT *
    		FROM t_compte_cmp
    		WHERE cmp_pseudo = \''.$username.'\'
    		AND cmp_mot_de_passe = \''.$password.'\'
    		AND cmp_statut = \'Actif\'
			');

			if(count($query->result_array()) == 1) return true;
			else return false;
		}

	}

?>