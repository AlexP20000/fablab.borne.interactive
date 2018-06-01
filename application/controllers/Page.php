<?php 
	/**
	 * 
	 */
	class Page extends CI_Controller{
		private $PATH = 'C:/wamp64/www/open_mag/images/'; ### OR '/var/www/html/licence/lic46/open_mag/images/' ###

		/* class constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Rubric');
				$this->load->model('DB_Page');
			}

		/* This function will show the back office */
			public function all(){
				$datas['pages'] = $this->DB_Page->get_all_pages();
				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/home_content_panel', $datas);
			}
			
		/* Function that let us to load the view that managing the Rubric */
			public function new_page(){
				$datas = array(
					'rubric_types' => $this->DB_Rubric->get_all_types(),
					'link_types' => $this->DB_Rubric->get_all_link_types(),
					'pages' => $this-> DB_Page->get_all_pages()
				);

				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/add_page', $datas);
			}
		/* function that .... */
			private function upload_mutiple_files($post_source_name){
				/* Get the curent link id from the database */
					$curent_link_id = 1;

				/* Set a next id */
					$next_link = $curent_link_id+1;

				/* Upload files */
					if(!empty($_FILES[''.$post_source_name.''])){
						/* Attributs concerning the files */
							$files_names = $_FILES['files']['name'];
							$files_temp = $_FILES['files']['tmp_name'];
							$files_types = $_FILES['files']['type'];

						/* Array containing the files names to insert into database */
							$names = array();

						/* Uploading the files */	
							for($cpt=0; $cpt<count($files_names); $cpt++){
								/* Get the file */
								if(!empty($files_types[$cpt])){
									$type = explode('/', $files_types[$cpt])[1];
									$name[$cpt] = $next_link.'.'.$type;
								}
								else $name[$cpt] = null;

								/* move the file the correct path */
									$path = $this->PATH.$name[$cpt];
									if(move_uploaded_file($files_temp[$cpt], $path)){
										$next_link++;
										$result = true;
									}
									else $result = false;
							}
					}
					else $result = false;

					if($result) return $names;
					else return null;
			}
			/* function that upload a file into a path */
				private function upload_file($src, $name){
					/* verify that the source is not empty */
					if(!empty($_FILES[''.$src.''])){
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


		/* function that .... */
			public function add(){
				/* Verify that the posted values are not empty */
					if( !empty($this->input->post('pag_type')) && !empty($this->input->post('pag_statut')) && !empty($this->input->post('pag_titre')) && !empty($this->input->post('pag_description')) ){
						/* Insert the t_page_pag row */
							$datas['pag_type'] = addslashes(strip_tags(trim($this->input->post('pag_type'))));
							$datas['pag_statut'] = ucfirst(addslashes(strip_tags(trim($this->input->post('pag_statut')))));
							$datas['pag_date'] = addslashes(strip_tags(trim($this->input->post('pag_date'))));
							$datas['pag_titre'] = ucfirst(addslashes(strip_tags(trim($this->input->post('pag_titre')))));
							$datas['pag_description'] = addslashes(trim($this->input->post('pag_description')));
							$datas['res_pseudo'] = $_SESSION['cmp_pseudo'];

							$pag_id = $this->DB_Page->add($datas);

						/* get last link id from the database */
							$id = $this->DB_Page->get_last_link_id();

						/* set the name file to the next id */
							$id++;
							$links = array();
						/* Calculte the number of links */
							$NB_LINK = count($_FILES);
						/* Get links indexes */
							$KEYS = array_keys($_FILES);
							$INDEXES = array();
							for($cpt=0; $cpt<$NB_LINK; $cpt++){
								$INDEXES[$cpt] = explode('_', $KEYS[$cpt])[1];
							}

						/* create an array with the correct links information */
							for($i=0; $i<$NB_LINK; $i++){
								/* Insert files values etc. + upload files */
									if(!empty($_FILES['file_'.$INDEXES[$i]]['name'])){
										$temp = $this->upload_file('file_'.$INDEXES[$i], $id);
										if(!empty($temp)){
											$links[$i]['link_id'] = $id;
											$links[$i]['link_label'] = addslashes(trim($this->input->post('label_'.$INDEXES[$i])));
											$links[$i]['link_type'] = addslashes(trim($this->input->post('type_'.$INDEXES[$i])));
											$links[$i]['link_value'] = $temp;
										}
									}
								/* Insert HyperText values etc. */
									else{
										if(!empty($this->input->post('link_'.$INDEXES[$i]))){
											$links[$i]['link_id'] = $id;
											$links[$i]['link_label'] = addslashes(trim($this->input->post('label_'.$INDEXES[$i])));
											$links[$i]['link_type'] = addslashes(trim($this->input->post('type_'.$INDEXES[$i])));
											$links[$i]['link_value'] = addslashes(trim($this->input->post('link_'.$INDEXES[$i])));
										}
									}
								/* Increment the id of the next link */
									$id++;
							}
						/* insert links into bdd */
							$this->DB_Page->insert_page_links($links, $pag_id);
					}

				/* Redirect to manage page */
					if(!empty($pag_id)){
						echo '
							<script>
								alert("La page a été correctement inserée !");
								document.location.href = "../page/all";
							</script>
						';					
					}
					else{
						echo '
							<script>
								alert("Erreur --> La page n\'a pas été correctement inserée !");
								document.location.href = "../page/all";
							</script>
						';
					}
			}

		/* function that .... */
			public function edit($id){
				$datas = array(
					'rubric_types' => $this->DB_Rubric->get_all_types(),
					'link_types' => $this->DB_Rubric->get_all_link_types(),
					'page' => $this->DB_Page->get($id),
					'page_links' => $this->DB_Page->get_page_links($id)
				);

				$this->load->view('back_office/edit_page', $datas);
			}
		/* function that .... */
			public function delete($id){
				if(!empty($id)){
					/* Delete all from the data base */
						$this->DB_Page->delete($id);

					/* Delete the files from the pages directory */
						#code php
					/* Redirect to manage page */
						echo '
							<script>
								alert("La page a été correcctement supprimée !");
								document.location.href = "../../page/all"
							</script>
						';
				}
			}
		/* function that .... */
			public function update(){
				/* Verify that the posted values are not empty */
					if( !empty($this->input->post('rub_id')) && !empty($this->input->post('pag_statut')) && !empty($this->input->post('pag_titre')) && !empty($this->input->post('pag_description')) ){
						/* Insert the t_page_pag row */
							$datas['pag_id'] = addslashes(strip_tags(trim($this->input->post('pag_id'))));
							$datas['rub_id'] = addslashes(strip_tags(trim($this->input->post('rub_id'))));
							$datas['res_id'] = addslashes(strip_tags(trim($this->input->post('res_id'))));
							$datas['pag_statut'] = ucfirst(addslashes(strip_tags(trim($this->input->post('pag_statut')))));
							$datas['pag_date'] = addslashes(strip_tags(trim($this->input->post('pag_date'))));
							$datas['pag_titre'] = ucfirst(addslashes(strip_tags(trim($this->input->post('pag_titre')))));
							$datas['pag_description'] = addslashes(trim($this->input->post('pag_description')));
							$datas['res_pseudo'] = $_SESSION['cmp_pseudo'];

							$this->DB_Page->update($datas);

						/* get last link id from the database */
							$id = $this->DB_Page->get_last_link_id();

						/* set the name file to the next id */
							$id++;
							$links = array();
						/* Calculte the number of links */
							$NB_LINK = count($_FILES);
						/* Get links indexes */
							$KEYS = array_keys($_FILES);
							$INDEXES = array();
							for($cpt=0; $cpt<$NB_LINK; $cpt++){
								$INDEXES[$cpt] = explode('_', $KEYS[$cpt])[1];
							}

						/* create an array with the correct links information */
							for($i=0; $i<$NB_LINK; $i++){
								/* Insert files values etc. + upload files */
									if(!empty($_FILES['file_'.$INDEXES[$i]]['name'])){
										$temp = $this->upload_file('file_'.$INDEXES[$i], $id);
										if(!empty($temp)){
											$links[$i]['link_id'] = $id;
											$links[$i]['link_label'] = addslashes(trim($this->input->post('label_'.$INDEXES[$i])));
											$links[$i]['link_type'] = addslashes(trim($this->input->post('type_'.$INDEXES[$i])));
											$links[$i]['link_value'] = $temp;
										}
									}
								/* Insert HyperText values etc. */
									else{
										if(!empty($this->input->post('link_'.$INDEXES[$i]))){
											$links[$i]['link_id'] = $id;
											$links[$i]['link_label'] = addslashes(trim($this->input->post('label_'.$INDEXES[$i])));
											$links[$i]['link_type'] = addslashes(trim($this->input->post('type_'.$INDEXES[$i])));
											$links[$i]['link_value'] = addslashes(trim($this->input->post('link_'.$INDEXES[$i])));
										}
									}
								/* Increment the id of the next link */
									$id++;
							}
						/* insert links into bdd */
							$this->DB_Page->insert_page_links($links, $datas['pag_id']);
					}
				/* Redirect to manage page */
				if(!empty($links)){
					echo '
						<script>
							alert("La page a été correctement mise à jour !");
							document.location.href = "../page/edit/'.$datas['pag_id'].'"
						</script>
					';
				}
				else{
					echo '
						<script>
							alert("Error --> La page n\'a pas été correctement mise à jour !");
							document.location.href = "../page/edit/'.$datas['pag_id'].'"
						</script>
					';
				}

			}

		/* function that ... */
			public function delete_link($link_id, $pag_id){
				if(!empty($link_id)){
					$this->DB_Page->delete_page_link($link_id);
					echo '
						<script>
							alert("Le lien a été correctement supprimé !");
							document.location.href = "../../../page/edit/'.$pag_id.'"
						</script>
					';
				}
				else{
					echo '
						<script>
							alert("Error --> Le lien n\'a pas été correctement supprimé !");
							document.location.href = "../../../page/edit/'.$pag_id.'"
						</script>
					';
				}
			}
	}
?>