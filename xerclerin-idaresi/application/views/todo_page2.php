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
			<form id="paymentValySend" method="post">
  				<div class="mb-3">
    				<!--<label for="name" class="form-label">Valyuta</label>-->
    				<input type="text" class="form-control" id="payment-valy" placeholder="Valyuta daxil edin" style="width:60%;" name="paymentValy" required>
  				</div>
  				<button type="button" id="mysubmit" name="mysubmit" class="btn btn-primary" onClick="javascript:sendForm('paymentValySend','todo.php')">Göndər</button>
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
				url:SITE_URL+"/insert2",
				data:myData,
				success:function(data) {
					window.location.href=SITE_URL+"page3";
				}
			});
		}

	</script>
</body>
</html>