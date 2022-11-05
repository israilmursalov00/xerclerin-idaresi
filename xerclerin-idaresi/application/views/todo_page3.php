<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<?php $this->load->view("depend/style");?>
	<style type="text/css">
		.row {
			background-color: #eee;
			border-radius: 17px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row p-4 mt-5">
			<form id="FormSend" method="post">
  				<div class="mb-3">
    				<input type="text" class="form-control" id="payment" placeholder="Ödənişin Məbləği" style="width:60%;" name="payment">
  				</div>
  				<div class="mb-3">
    				<input type="text" class="form-control" id="category" placeholder="Kategoria  daxil edin" style="width:60%;" name="category">
  				</div>
  				<div class="mb-3">
    				<input type="text" class="form-control" id="comment" placeholder="Rəy daxil edin" style="width:60%;" name="comment">
  				</div>
  				 <div class="mb-3">
    				<select class="form-select mb-2" aria-label=".form-select-lg example" style="width: 60%;" name="select">
  						<option selected>Seçin</option>
  						<option value="0" name="income">Mədaxil</option>
  						<option value="1" name="expense">Məxaric</option>
					</select>
					<div class="mb-3">
    				  <input type="text" class="form-control" id="comment" placeholder="Mədaxil və ya Məxaric ediləcək ödəniş" style="width:60%;" name="money_ex">
  				</div>
  				</div>
  				 <button type="button" id="mysubmit" name="mysubmit" class="btn btn-primary" onClick="javascript:sendForm('FormSend','todo.php')">Göndər</button>
			</form>		

		</div>
	</div>

	<?php $this->load->view("depend/script");?>
			<script type="text/javascript">


		var SITE_URL = "http://localhost/todo/";


		function sendForm(formID) {

			$("#mysubmit").prop("disabled",true);
			var myData=$("form#"+formID).serialize();

			$.ajax({
				type:"post",
				url:SITE_URL+"insert3",
				data:myData,
				success:function(data) {
					window.location.href=SITE_URL+"table";
				}
			});
		}

	</script>
</body>
</html>