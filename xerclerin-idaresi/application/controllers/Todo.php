<?php





 class Todo extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 		$this->load->model("todo_model");

 	}

 	public function index() {
		$this->load->view("todo_index");

 	}

 	public function Page2() {
		$this->load->view("todo_page2");
 	}


 	public function Page3() {
		$this->load->view("todo_page3");
 	}

 	public function Page4() {
		$this->load->view("todo_page4");
 	}



 	// Birinci page aid olan function ( ödəniş növü )


 	public function insert() {
 		$paymentType =  $this->input->post("paymentType");


 		$inserts = $this->todo_model->insert(
 			"odenis_nov",
 			array(
 				"odenis_name" => $paymentType
 			)
 		);

 		if($inserts) {
 			redirect(uri: base_url("todo/page2"));
 		}

 	}


 	// İkinci page aid olan function  ( valyuta )

 	public function insert2() {

 		$paymentValy =  $this->input->post("paymentValy");

 		$inserts = $this->todo_model->insert(
 			"valyuta",
 			array(
 				"name" => $paymentValy
 			)
 		);

 		if($inserts) {
 			redirect(uri: base_url("todo/page3"));
 		}
 	}



 	public function insert3() {

 		$payment =  $this->input->post("payment");
 		$money =  $this->input->post("money_ex");
 		$category =  $this->input->post("category");
 		$comment =  $this->input->post("comment");
 		$select =  $this->input->post("select");


		$inserts = $this->todo_model->insert(
 				"odenis",
 				array(
 					"payment" => $payment,
 					"comment" => $comment,
 					"income" => ($select == '0' ? $money : ''),
 					"expense" => ($select == '1' ? $money : '') 
 				)
 			);
       

 		$insertCategory = $this->todo_model->insert(
 			"category",
 			array(
 				"category_name" => $category
 			)
 		);


 		if($inserts) {
 			redirect(uri: base_url("todo/table"));
 		} else {
 			echo "error";
 		}
 	}


 	public function Table() {

 		$items = $this->todo_model->get_all();

 		$viewData = array(
 			"list" => $items
 		);

 		$this->load->view("todo_table",$viewData);
 	}


 	public function Table2() {
 		$items = $this->todo_model->get_all();

 		$viewData = array(
 			"list" => $items
 		);

 		$this->load->view("todo_table2",$viewData);
 	}
  } 
 
?>