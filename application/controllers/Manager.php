<?php 
	class Manager extends CI_Controller{
		private $PATH = 'C:/wamp64/www/open_mag/assets/back_office/profils/'; ### OR '/var/www/html/licence/lic46/open_mag/assets/back_office/profils/' ###

		/* Class constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Manager');
			}
		/* Functions that lets us to manage the managers */
			/* function that crypt the password with sha256 */
				public function encrypt($password){
					$sel = "Shadowalker";
					return hash('sha256', $sel.$password);
				}

		/* Function that lets us to load the views that managing the managers */
			public function manage(){
				$datas['managers'] = $this->DB_Manager->get_all();

				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/manage_managers', $datas);
			}
		/* Functions that lets us to manage the managers */
			/* function that change the manager status to --> Actif */
				public function enable($pseudo){
					$clean_pseudo = addslashes(strip_tags(trim($pseudo)));
					if(!empty($clean_pseudo)){
						$this->DB_Manager->enable($clean_pseudo);
						header("Location: ../../manager/manage");
					}
					else{
						header("Location: ../../manager/manage");
					}
				}
			/* function that change the manager status to --> Inactif */
				public function disable($pseudo){
					$clean_pseudo = addslashes(strip_tags(trim($pseudo)));
					if(!empty($clean_pseudo)){
						$this->DB_Manager->disable($clean_pseudo);
						header("Location: ../../manager/manage");
					}
					else{
						header("Location: ../../manager/manage");
					}
				}

			/* function that reset all managers passwords to --> 123456789 */
				public function reset_all_passwords(){
					$this->DB_Manager->reset_all_passwords();
					header("Location: ../manager/manage");
				}
			/* function that reset the manager password to --> 123456789 */
				public function reset_password($pseudo){
					$clean_pseudo = addslashes(strip_tags(trim($pseudo)));
					if(!empty($clean_pseudo)){
						$this->DB_Manager->reset_password($clean_pseudo);
						header("Location: ../../manager/manage");
					}
					else{
						header("Location: ../../manager/manage");
					}
				}
			/* function that verify if the password of the pseudo is correct */
				public function password_is_correct($pseudo, $password){
					return $this->DB_Manager->password_is_correct($pseudo, $password);
				}

				public function update_password($pseudo, $old_password, $new_password){
					$this->DB_Manager->update_password($pseudo, $old_password, $new_password);
				}

			/* function that upload a file into a path */
				private function upload_file($src, $name){
					/* verify that the source is not empty */
					if(isset($_FILES[''.$src.''])){
						/* Differents file propreties */
							$file_temp  = $_FILES[''.$src.'']['tmp_name'];
							$file_type  = $_FILES[''.$src.'']['type'];

						/* Filtring the datas to get a correct filename */
							if(!empty($file_type)){
								$type = explode('/', $file_type)[1];
								$name = $name.'.'.$type;
							}
							else $name = null;

						/* move the file the correct path */
							$path = $this->PATH.$name;
							if(move_uploaded_file($file_temp, $path)){
								return $name;
							}
							else return null;
					}
					return null;
				}

				public function update_picture($pseudo){
					/* upload the picture file */
						$name = $this->upload_file('picture', $pseudo);
					
					if($name != null){
						/* Update the database */
						$this->DB_Manager->update_picture($pseudo, $name);
					/* update the session image datas */
						$_SESSION['picture'] = $name;
					/* redirect to home page*/
						echo '
							<script>
								alert("La photo a été correcctement mise à jour !");
								document.location.href = "../../page/all"
							</script>
						';						
					}
					else{
						echo '
							<script>
								alert("Erreur --> La photo n\'a pas été correcctement mise à jour !");
								document.location.href = "../../page/all"
							</script>
						';
					}

				}

			/* function that update the manager datas in the session : */
				public function upadate_session($datas){
					$_SESSION['res_nom'] = $datas['name'];
					$_SESSION['res_prenom'] = $datas['firstname'];
					$_SESSION['cmp_pseudo'] = $datas['pseudo'];
				}

			/* function that update the manager information */
				public function update(){
					/* Verify that the posted value are not empty */
						if(!empty($this->input->post('name')) && !empty($this->input->post('firstname')) &&
							!empty($this->input->post('contact')) && !empty($this->input->post('status')) && !empty($this->input->post('pseudo'))
						){
						/* upload the picture file */
							include('upload_file.php');

						/* Create an associative array with the posted datas */
							$datas = array(
								'picture'	  => addslashes($name),
								'name' 		  => ucfirst(addslashes(strip_tags(trim($this->input->post('name'))))),
								'firstname' => ucfirst(addslashes(strip_tags(trim($this->input->post('firstname'))))),
								'contact'   => strtolower(addslashes(strip_tags(trim($this->input->post('contact'))))),
								'status' 	  => ucfirst(addslashes(strip_tags(trim($this->input->post('status'))))),
								'pseudo'	  => strtolower(addslashes(strip_tags(trim($this->input->post('pseudo'))))),
								'pseudo-old'=> strtolower(addslashes(strip_tags(trim($this->input->post('pseudo-old')))))
							);

						/* Call the function that will insert the manager into the database */
							$this->DB_Manager->update($datas);
						}
					/* Redirect the user to the managing page */
						header("Location: ../manager/manage");
				}

			/* function that update the manager settings --> used for an ajax request */
				public function update_settings(){
					/* Retreiv the posted datas with ajax request */
						$posted_datas = $_POST['posted_datas'];

					/* Verify that the password is correct */
						if(!empty($posted_datas['pseudo']) && !empty($posted_datas['old_password']) && !empty($posted_datas['status'])){
							$datas['pseudo'] = strtolower(addslashes(strip_tags(trim($posted_datas['pseudo']))));
							$datas['pseudo-old'] = strtolower(addslashes(strip_tags(trim($posted_datas['pseudo-old']))));
							$datas['old_password'] = addslashes($posted_datas['old_password']);
							$datas['status'] = ucfirst(addslashes(strip_tags(trim($posted_datas['status']))));

							if($this->password_is_correct($datas['pseudo'], $datas['old_password'])){
								if(!empty($posted_datas['name']) && !empty($posted_datas['firstname']) && !empty($posted_datas['contact'])){

									/* updating the associative array that will be sent for the model to update the database */
										$datas['name'] = ucfirst(addslashes(strip_tags(trim($posted_datas['name']))));
										$datas['firstname'] = ucfirst(addslashes(strip_tags(trim($posted_datas['firstname']))));
										$datas['contact'] = strtolower(addslashes(strip_tags(trim($posted_datas['contact']))));
					
									/* call for the function that will update the datas in the database */
										$this->DB_Manager->update($datas);
										$this->upadate_session($datas);
									/* Verify if the password will be updated or not */
										if(!empty($posted_datas['change_state'])){
											/* verify that the sent value are not empty */
												if(!empty($posted_datas['new_password']) && $posted_datas['change_state']==true){
													/* format the values */
														$datas['new_password'] = addslashes($posted_datas['new_password']);

													/* call the function that will update the password */
														$this->update_password($datas['pseudo'], $datas['old_password'], $datas['new_password']);
														$_SESSION['cmp_mot_de_passe'] = $this->encrypt($datas['new_password']);

														echo'Profil and Password updated correctly !';
												}
												else echo 'Profil updated !';
										}
										else echo 'Change password error';
								}
								else 'Datas error';
								
							}
							else echo 'Incorrect Password.';
						}
						else echo 'Password Error.';
				}

		/* getters and setters of the class */
			public function add(){
				/* Verify that the posted value are not empty */
				if(!empty($this->input->post('name')) && !empty($this->input->post('firstname')) &&
					!empty($this->input->post('contact')) && !empty($this->input->post('status')) && !empty($this->input->post('pseudo')) &&
					!empty($this->input->post('password'))
				){
					/*Encrypt the password */
						$sel = "Shadowalker";
						$pass = addslashes($this->input->post('password'));
						$pass = hash('sha256', $sel.$pass);
					/* upload the picture file */
						include('upload_file.php');

					/* Create an associative array with the posted datas */
						$datas = array(
							'picture'	  => addslashes($name),
							'name' 		  => ucfirst(addslashes(strip_tags(trim($this->input->post('name'))))),
							'firstname' => ucfirst(addslashes(strip_tags(trim($this->input->post('firstname'))))),
							'contact'   => strtolower(addslashes(strip_tags(trim($this->input->post('contact'))))),
							'status' 	  => ucfirst(addslashes(strip_tags(trim($this->input->post('status'))))),
							'pseudo'	  => strtolower(addslashes(strip_tags(trim($this->input->post('pseudo'))))),
							'password'  => $pass
						);


					/* Call the function that will insert the manager into the database */
						$this->DB_Manager->add($datas);	
				}

				/* Redirect the user to the managing page */
					header("Location: ../manager/manage");
			}
	}
?>