<?php 
	class Rubric extends CI_Controller{
		/* Class Constructor */
			public function __construct(){
				parent::__construct();
				$this->load->helper('url_helper');
				$this->load->model('DB_Rubric');
			}

			public function add(){
				if(!empty($this->input->post('label')) && !empty($this->input->post('description')) ){
					$datas['label'] = ucfirst(addslashes(strip_tags(trim($this->input->post('label')))));
					$datas['description'] = ucfirst(addslashes(strip_tags(trim($this->input->post('description')))));

					$this-> DB_Rubric->add($datas);
				}
				header("Location: ../page/new_page");
			}

			public function delete($id){
				if(!empty($id)){
					$this-> DB_Rubric->delete($id);
				}
				header("Location: ../../page/new_page");
			}

			public function add_link(){

			}

			public function delete_link($id){
				
			}

	}
?>