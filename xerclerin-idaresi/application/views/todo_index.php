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
			<form id="paymentTypeSend" method="post" action="javascript:void(0);">
  				<div class="mb-3">
    				<!--<label for="name" class="form-label">Name</label>-->
    				<input type="text" class="form-control" id="payment-type" placeholder="Ödəmə növünü daxil edin" style="width:60%;" name="paymentType">
  				</div>
  				<button type="button" id="mysubmit" name="mysubmit" class="btn btn-primary" onClick="javascript:sendForm('paymentTypeSend')">Göndər</button>
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
				url:SITE_URL+"insert",
				data:myData,
				success:function(data) {
					/*console.log(data);*/window.location.href=SITE_URL+"page2";
				}
			});
		}

	</script>
</body>
</html>