<div class="col-lg-12 feature-box"  id="infoMessage">
    <form method="post" class="feature-box" action="https://innovationsrus.in/payment/ccavRequestHandler.php">
			<table width="100%" class="feature-box" style="color:#FFFFFF;" border='1' align="left">
				
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="text" name="tid" id="tid"  value="<?php echo rand(99,77).date("ymdhis").rand(11,77); ?>" readonly /></td>
				</tr>
				
				<tr>
			<td>Order Id:</td><td><input type="text" name="order_id" readonly value="<?php echo $a->inn_id;
						
						?>" /></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="text" readonly name="amount" value="<?php echo 1000; ?>"/></td>
				</tr>
				<tr>
					<td>Currency :</td><td><input type="text" readonly name="currency" value="INR"/></td>
				</tr>
				
			 	
			
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" readonly name="billing_name" value="<?php print_r($a->TeamLeader);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text"  name="billing_address" value="<?php print_r($a->Billing_Address);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text"  name="billing_city"  value="<?php print_r($a->Billing_City);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text"  name="billing_state" value="<?php print_r($a->Billing_State);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text"  name="billing_zip" value="<?php print_r($a->Billing_Pincode);?>"  /></td>
		        </tr>
		     
		        <tr>
		        	<td>Billing Mobile	:</td><td><input type="text" readonly name="billing_tel" value="<?php print_r($a->Contact_no);?>"  /></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" readonly name="billing_email" value="<?php print_r($a->Email_id);?>" /></td>
		        </tr>
		    	<tr>
		     		<td colspan="2"> <br />
<br />

 <input type="hidden" name="billing_country" value="India" />
		<input type="hidden" name="language" value="EN"/>
<!--<input type="hidden" name="redirect_url" value="https://innovationsrus.in/payment/ccavResponseHandler.php"/>
<input type="hidden" name="cancel_url" value="https://innovationsrus.in/payment/ccavResponseHandler.php"/>-->
		<input type="hidden" name="redirect_url" value="<?php echo base_url;?>index.php/Welcome/detailsinnov"/>
<input type="hidden" name="cancel_url" value="<?php echo base_url;?>index.php/Welcome/detailsinnov"/>
		<input type="hidden" name="merchant_id" value="1604723" />
		<input type="hidden" name="integration_type" value="iframe_normal" />
			
		
		<input type="submit" value="CheckOut" class="btn-success">
        <br />
<br /></td>
		     	</tr>
		       
	      	</table><br />
<br />
		</form>
<br />
<br />
<br />
</div>

