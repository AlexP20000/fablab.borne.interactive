<?php 
	class DB_Manager extends CI_Model{
		/* Class Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->database();
			}

		/* Functions that lets us to manage the managers */
			/* function that crypt the password with sha256 */
				public function encrypt($password){
					$sel = "Shadowalker";
					return hash('sha256', $sel.$password);
				}

			/* function that change the manager status to --> Actif */
				public function enable($pseudo){
					$query = $this->db->query('
						UPDATE t_compte_cmp
						SET cmp_statut=\'Actif\'
						WHERE cmp_pseudo=\''.$pseudo.'\'
					');
				}
			/* function that change the manager status to --> Inactif */
				public function disable($pseudo){
					$query = $this->db->query('
						UPDATE t_compte_cmp
						SET cmp_statut=\'Inactif\'
						WHERE cmp_pseudo=\''.$pseudo.'\'
					');
				}
			/* function that reset the manager password to --> 123456789 */
				public function reset_password($pseudo){
					$DEFAULT_PASS = $this->encrypt("123456789");

					$query = $this->db->query('
						UPDATE t_compte_cmp
						SET cmp_mot_de_passe=\''.$DEFAULT_PASS.'\'
						WHERE cmp_pseudo=\''.$pseudo.'\'
					');
				}

			/* function that reset all managers passwords to --> 123456789 */
				public function reset_all_passwords(){
					$DEFAULT_PASS = $this->encrypt("123456789");
					
					$query = $this->db->query('
						UPDATE t_compte_cmp
						SET cmp_mot_de_passe=\''.$DEFAULT_PASS.'\'
					');
				}

			/* function verifying if the pseudo password is correct */
				public function password_is_correct($pseudo, $password){
					$pass = $this->encrypt($password);

					$query = $this->db->query('
						SELECT cmp_pseudo, cmp_mot_de_passe, cmp_statut 
						FROM t_compte_cmp
						WHERE cmp_pseudo = \''.$pseudo.'\'
						AND cmp_mot_de_passe = \''.$pass.'\'
						AND cmp_statut = \'Actif\'
					');

					return ( count($query->result_array()) > 0 );
				}

				public function update_password($pseudo, $old_password, $new_password){
					$old_pass = $this->encrypt($old_password);
					$new_pass = $this->encrypt($new_password);

					$this->db->query('
						UPDATE t_compte_cmp SET cmp_mot_de_passe = \''.$new_pass.'\'
						WHERE cmp_pseudo = \''.$pseudo.'\'
						AND cmp_mot_de_passe = \''.$old_pass.'\'
					');
				}

			/* function that update the picture feild */
				public function update_picture($pseudo, $name){
					$this->db->query('UPDATE t_responsable_res SET res_photo = \''.$name.'\'WHERE cmp_pseudo = \''.$pseudo.'\'');
				}

			/* function that update the manager information */
				public function update($datas){
					/* update the compte table row */
						$query = $this->db->query('
							UPDATE t_compte_cmp SET
								cmp_pseudo = \''.$datas['pseudo'].'\',
								cmp_statut = \''.$datas['status'].'\'
							WHERE cmp_pseudo = \''.$datas['pseudo-old'].'\'
						');
					/* Update the responsable table row */
						$query = $this->db->query('
							UPDATE t_responsable_res SET 
								res_nom = \''.$datas['name'].'\',
								res_prenom = \''.$datas['firstname'].'\',
								res_contact = \''.$datas['contact'].'\'
							WHERE cmp_pseudo = \''.$datas['pseudo'].'\'
						');

					/* update the manager picture */
					if(!empty($datas['picture'])){
						$this->update_picture($datas['pseudo'], $datas['picture']);
					}
				}

		/* getters and setters of the class */
			public function get_all(){
				$query = $this->db->query('
					SELECT r.res_id, r.res_nom, r.res_prenom, r.res_contact, c.cmp_pseudo, c.cmp_statut
					FROM t_responsable_res r, t_compte_cmp c
					WHERE c.cmp_pseudo = r.cmp_pseudo
				');
				return $query->result_array();
			}

			public function add($datas){
				/* Insert the compte into the database */
				$query = $this->db->query('
					SELECT *
					FROM t_compte_cmp
					WHERE cmp_pseudo = \''.$datas['pseudo'].'\'
				');
				$result = $query->result_array();
				if(count($result) <= 0){
					$this->db->query('
					INSERT INTO t_compte_cmp(cmp_pseudo, cmp_mot_de_passe, cmp_statut)
					VALUES (\''.$datas['pseudo'].'\',\''.$datas['password'].'\',\''.$datas['status'].'\')
				');

				/* Insert the compte into the database */
				$this->db->query('
					INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo)
					VALUES (\''.$datas['name'].'\',\''.$datas['firstname'].'\',\''.$datas['contact'].'\',\''.$datas['picture'].'\',\''.$datas['pseudo'].'\')
				');
				}
			}
	}
?>