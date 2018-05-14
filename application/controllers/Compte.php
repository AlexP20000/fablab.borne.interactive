<?php 
	class Compte extends CI_Controller{
		/* Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Compte');
			}

		/* Function that let us to show the login page */
			public function login(){
				$this->load->view('back_office/login');
			}

			public function connect(){
				if(!empty($this->input->post('username')) && !empty($this->input->post('password')) ){
					$user = addslashes($this->input->post('username'));
					$pass = addslashes($this->input->post('password'));

					$sel = "Shadowalker";
					$pass = hash('sha256', $sel.$pass);
					$datas = $this->DB_Compte->connect($user, $pass);
					if(count($datas) > 0){
						// Start a new session with the use logins :
							$this->load->library('session');
							$this->session->set_userdata($datas);
						// Redirect the user to the back-office :
							header("Location: ../compte/home");
					}
					else{
						header("Location: ../compte/login");
					}
				}
				else{
					header("Location: ../compte/login");
				}
			}

		/* This function will show the back office */
			public function home(){
				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/home_content_panel');
			}

		/* function that let us to disconnect */
			public function logout(){
				// delete session datas :
					$this->session->unset_userdata('res_nom');
					$this->session->unset_userdata('res_prenom');
					$this->session->unset_userdata('cmp_pseudo');
					$this->session->unset_userdata('cmp_mot_de_passe');
				// Redirection vers la page login :
					$this->load->view('back_office/logout');
			}

		/* function that le us to manage users */
			public function manage(){
				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/manage_users');
			}
	}
?>