<?php 
	class Manager extends CI_Controller{
		/* Class constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Manager');
			}
		/* Function that lets us to load the views that managing the managers */

		public function manage(){
			$this->load->view('back_office/dashboard');
			$this->load->view('back_office/manage_managers');
		}
	}
?>