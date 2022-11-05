<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
	<?php $this->load->view("depend/style");?>
	<style type="text/css">
		select {
			margin-left: 20px;
		}

		.selected {
			color: black !important;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row p-4 mt-5">
			<div class="table-container">
				<div style="display:flex;margin-bottom: 50px;">
  					<select class="form-select mb-2" aria-label=".form-select-lg example" style="width: 60%;height: 40px;" name="select" id="select1">
  						<option class="selected" selected disabled>Ödəniş Növü Seçin</option>

  						<?php
							foreach ($list as $value) {

						?>
  						<option value="<?php echo $value->odenis_name;?>"><?php echo $value->odenis_name;?></option>
  						<?php
  							}
  						?>
					</select>
					<select class="form-select mb-2" aria-label=".form-select-lg example" style="width: 60%;height: 40px;" name="select" id="select2" >
  						<option class="selected" selected id="select2" disabled>Valyuta Seçin</option>

  						<?php
							foreach ($list as $value) {

						?>
  						<option value="0" name="income"><?php echo $value->name;?></option>
  						<?php
  							}
  						?>
					</select>
  					<select class="form-select mb-2" aria-label=".form-select-lg example" style="width: 60%;height: 40px;" name="select" id="select3">
  						<option class="selected" selected disabled><b>Katagoriya Seçin</b></option>
  						
  						<?php
							foreach ($list as $value) {
						
						?>
  						<option value="0" name="income"><?php echo $value->category_name;?></option>
  						<?php
  							}
  						?>
					</select>
					<select class="form-select mb-2" aria-label=".form-select-lg example" style="width: 60%;height: 40px;" name="select" id="select4">
  						<option class="selected" selected disabled><b>Tarix Seçin</b></option>
  						
  						<?php
							foreach ($list as $value) {
						
						?>
  						<option value="0" name="income"><?php echo $value->category_create_at;?></option>
  						<?php
  							}
  						?>
					</select>
  					<input type="text" name="" id="inputFil" value="" style="display:none;" />
				</div>

			<!--table1-->
			<table class="table" style="">
  				<thead>
    				<tr>
      					<th scope="col">#</th>
      					<th scope="col">ID</th>
      					<th scope="col">MƏBLƏĞ</th>
      					<th scope="col">VALYUTA</th>
      					<th scope="col">RƏY</th>
      					<th scope="col">KATAQURIYA ADI</th>
      					<th scope="col">TARIX</th>
      					<th scope="col">MƏXARİC</th>
      					<th scope="col">MƏDAXİL</th>
      					<th scope="col">QALIQ</th>
    				</tr>
  				</thead>			
  			   <tbody id="myTable">
  			    <?php

					foreach ($list as $item) {
						//echo "<pre>";
						//print_r($item);
						//echo "</pre>";
				
				?>
    				<tr>
      					<th scope="row"></th>
      					<td><?php echo $item->ID; ?></td>
      					<td id="payment_type"><?php echo $item->payment; ?></td>
      					<td><?php echo $item->name; ?></td>
      					<td><?php echo $item->comment; ?></td>
      					<td><?php echo $item->category_name; ?></td>
      					<td><?php echo $item->category_create_at; ?></td>
      					<td><?php echo $item->expense == 0 ? '' : $item->expense; ?></td>	
      					<td><?php echo $item->income == 0 ? '' : $item->income; ?></td>
      					<td>
      						<?php 

      						 if(!empty($item->income)){
      						 	echo $item->payment+$item->income;
      						 } else {
      						 	if($item->payment>$item->expense) {
      						 		echo $item->payment-$item->expense;
      						 	} else {
      						 		echo $item->expense-$item->payment;
      						 	}
      						 } 

      						?>
      							
      					</td>

    				</tr>
    				<?php 
  						} 
  					?>
  				</tbody>
			</table>
			</div>
	</div>
	</div>

	<?php $this->load->view("depend/script");?>
</body>
</html>
































<!--- 
			<div class="input-group mb-5 w-25 mt-5">
  				<input class="form-control" id="search2" placeholder="Axtar" aria-label="Axtar" aria-describedby="button-addon2">
  				
			</div>

			<table class="table" style="margin-bottom: 10rem;">
  				<thead>
    				<tr>
      					<th scope="col">#</th>
      					<th scope="col">ID</th>
      					<th scope="col">KATAQURIYA ADI</th>
      					<th scope="col">TARIX</th>
      					<th scope="col">MƏDAXİL</th>
      					<th scope="col">MƏXARİC</th>
      					<th scope="col">QALIQ</th>
    				</tr>
  				</thead>			
  			   <tbody id="myTable2">
  			    <?php

					//foreach ($list as $item) {
				?>
    				<tr>
      					<th scope="row"></th>
      					<td><?php echo $item->ID; ?></td>
      					<td><?php echo $item->category_name; ?></td>
      					<td><?php echo $item->category_create_at; ?></td>
    				</tr>
    				<?php 
  						//} 
  					?>
  				</tbody>
			</table>

			<div class="input-group mb-5 w-25 mt-5">
  				<input class="form-control" id="search3" placeholder="Axtar" aria-label="Axtar" aria-describedby="button-addon2">
  				
			</div>

			
			<table class="table">
  				<thead>
    				<tr>
      					<th scope="col">#</th>
      					<th scope="col">MƏDAXİL</th>
      					<th scope="col">MƏXARİC</th>
      					<th scope="col">QALIQ</th>
    				</tr>
  				</thead>			
  			   <tbody id="myTable3">
    				<tr>
      					<th scope="row"></th>
      					<td><?php echo $item->income; ?></td>
      					<td><?php echo $item->expense; ?></td>
      					<td><?php echo $item->income; ?></td>
    				</tr>
    				<?php 
  						//} 
  					?>
  				</tbody>
			</table>

		-->

