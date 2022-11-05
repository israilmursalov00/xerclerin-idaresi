<?php 

	class Todo_model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}


		//public $tableName = "odenis_novu";

		public function get_all() {


			return $this->db->query("SELECT odenis_nov.odenis_name,odenis.comment,odenis.income,odenis.payment,odenis.expense,category.ID,category.category_name,category.category_create_at,valyuta.name FROM odenis LEFT JOIN odenis_nov ON odenis_nov.ID=odenis.ID LEFT JOIN valyuta ON odenis_nov.ID=valyuta.ID LEFT JOIN category ON odenis_nov.ID=category.ID")->result();

		}

	    public function insert($tableNames, $data = array()) {
			

			return $this->db->insert($tableNames, $data);
		}

	}


 ?>