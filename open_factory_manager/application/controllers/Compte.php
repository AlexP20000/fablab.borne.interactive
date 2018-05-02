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

				if($this->DB_Compte->connect($user, $pass)){
					// Start a new session with the use logins :
						$this->load->library('session');
						$datas = array('username'=> $user);
						$this->session->set_userdata($datas);
					// Redirect the user to the back-office :
						$this->load->view('back_office/dashboard');
				}
				else{
					header("Location: ../compte/login");
				}
			}
			else{
				header("Location: ../compte/login");
			}
		}

	/* function that let us to disconnect */
		public function logout(){
			// delete session datas :
				$this->session->unset_userdata('username');
			// Redirection vers la page login :
				$this->load->view('templates/logout');
		}

	/* function that le us to manage users */
		public function manage(){
			$this->load->view('back_office/dashboard');
			$this->load->view('back_office/manage_users');
		}


	}
?>