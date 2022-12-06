	<div class="col-lg-12 feature-box"  id="infoMessage">
    
    
    <form method="post" name="customerData" class="feature-box" action="https://innovationsrus.in/payment/ccavRequestHandler.php">
			<table class="feature-box"  width="100%" border='1' align="left">
				
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="text" name="tid" id="tid"  value="<?php echo rand(99,77).date("ymdhis").rand(11,77); ?>" readonly /></td>
				</tr>
				
				<tr>
			<td>Order Id:</td><td><input type="text" name="order_id" readonly value="<?php echo $a->Startup_id;
						
						?>" /></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="text" name="amount" readonly value="<?php echo 1000; ?>"/></td>
				</tr>
				<tr>
					<td>Currency :</td><td><input type="text" name="currency" readonly value="INR"/></td>
				</tr>
				
			 	
			
		     	<tr>
		     		<td colspan="2">Billing information:</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" readonly value="<?php print_r($a->LeaderName);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address"  value="<?php print_r($a->Billing_Address);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city"   value="<?php print_r($a->Billing_City);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state"  value="<?php print_r($a->Billing_State);?>" /></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip"  value="<?php print_r($a->Billing_Pincode);?>"  /></td>
		        </tr>
		     
		        <tr>
		        	<td>Billing Mobile	:</td><td><input type="text" name="billing_tel" readonly value="<?php print_r($a->Contact);?>"  /></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" readonly value="<?php print_r($a->LeaderEmail);?>" /></td>
		        </tr>
		    	<tr>
		     		<td colspan="2"><br />
<br />
<input type="hidden" name="billing_country" value="India" />
		<input type="hidden" name="language" value="EN"/>
		<input type="hidden" name="redirect_url" value="<?php echo base_url;?>index.php/Welcome/detailsst"/>
<input type="hidden" name="cancel_url" value="<?php echo base_url;?>index.php/Welcome/detailsst"/>
		<input type="hidden" name="merchant_id" value="1604723" />
		<input type="hidden" name="integration_type" value="iframe_normal" />
			
		
		<INPUT TYPE="submit" value="CheckOut" class="btn-success"><br />
<br />
</td>
		     	</tr>
		       
	      	</table>
		
		
		   
	      </form>
</div>
<br />
<br />
<br />
