<?php 
	class Compte extends CI_Controller{
		/* Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Compte');
			}
		/* Functions that lets us to manage the managers */
			/* function that crypt the password with sha256 */
				public function encrypt($password){
					$sel = "Shadowalker";
					return hash('sha256', $sel.$password);
				}

		/* Function that let us to show the login page */
			public function login(){
				$this->load->view('back_office/login');
			}

		/* function that lets us to connect to the back-office */
			public function connect(){
				if(!empty($this->input->post('username')) && !empty($this->input->post('password')) ){
					$user = addslashes($this->input->post('username'));
					$pass = addslashes($this->input->post('password'));

					$pass = $this->encrypt($pass);
					$datas = $this->DB_Compte->connect($user, $pass);
					if(count($datas) > 0){
						// Start a new session with the use logins :
							$this->load->library('session');
							$this->session->set_userdata($datas);
						// Redirect the user to the back-office :
							header("Location: ../page/all");
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
					$this->session->unset_userdata('res_nom');
					$this->session->unset_userdata('res_prenom');
					$this->session->unset_userdata('cmp_pseudo');
					$this->session->unset_userdata('cmp_mot_de_passe');
				// Redirection vers la page login :
					$this->load->view('back_office/logout');
			}
	}
?>
