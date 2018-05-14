<?php 
	class Rubric extends CI_Controller{
		/* Class Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Rubric');
			}

		/* Function that let us to load the view that managing the Rubric */
			public function add(){
				$this->load->view('back_office/dashboard');
				$this->load->view('back_office/add_rubric');
			}
	}
?>