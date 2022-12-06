<?php
//print_r($a);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow" />


    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <meta name="viewport" content="width-device-width, initial-scale=1"> -->
  <title>IRU</title>
 <link rel="icon" href="favicon(1).ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;600;900&family=Ubuntu:wght@300;400;500&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url;?>public_html/css/styles.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
  integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
  crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
</head>
<body>
	<div class="container-fluid">
	<form method="post" name="customerData" action="https://innovationsrus.in/payment/ccavRequestHandler.php">
		<h3 align="center" class="my-5">Detail</h3>
			<table width="70%" height="100" border='1' align="center">
				
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="text" name="tid" id="tid" readonly /></td>
				</tr>
				
				<tr>
			<td>Order Id:</td><td><input type="text" name="order_id" value="<?php echo $a->inn_id;
						
						?>" /></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="text" name="amount" value="<?php echo 1000; ?>"/></td>
				</tr>
				<tr>
					<td>Currency :</td><td><input type="text" name="currency" value="INR"/></td>
				</tr>
				
			 	
			
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" readonly name="billing_name" value="<?php print_r($a->TeamLeader);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value="<?php print_r($a->Billing_Address);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city"  value="<?php print_r($a->Billing_City);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value="<?php print_r($a->Billing_State);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="<?php print_r($a->Billing_Pincode);?>"  /></td>
		        </tr>
		     
		        <tr>
		        	<td>Billing Mobile	:</td><td><input type="text" name="billing_tel" value="<?php print_r($a->Contact_no);?>"  /></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" readonly name="billing_email" value="<?php print_r($a->Email_id);?>" /></td>
		        </tr>
		    	<tr>
		     		<td colspan="2"></td>
		     	</tr>
		       
	      	</table>
		
		
		   <input type="hidden" name="billing_country" value="India" />
		<input type="hidden" name="language" value="EN"/>
<!--<input type="hidden" name="redirect_url" value="https://innovationsrus.in/payment/ccavResponseHandler.php"/>
<input type="hidden" name="cancel_url" value="https://innovationsrus.in/payment/ccavResponseHandler.php"/>-->
		<input type="hidden" name="redirect_url" value="<?php echo base_url;?>index.php/Welcome/details"/>
<input type="hidden" name="cancel_url" value="<?php echo base_url;?>index.php/Welcome/details"/>
		<input type="hidden" name="merchant_id" value="1604723" />
		<input type="hidden" name="integration_type" value="iframe_normal" />
			
		
		<INPUT TYPE="submit" value="Check Out" class="btn-success">
	      </form>
	</div>
	</body>
	
</html>

