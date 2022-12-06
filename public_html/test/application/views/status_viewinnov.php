

<?php
if(!$a)
{
	echo "Invalid Details. Please fill correct information";
exit;
}

?>
			<h1 align="center" >Status</h1>
			
			<span style="color:white">Order Id:<?php print_r($a[0]->inn_id);?></span><br>
<span style="color:white">Team Leader Name:<?php print_r($a[0]->TeamLeader);?></span><br>

<span style="color:white">Email Id:<?php print_r($a[0]->Email_id);?></span><br>

			<span style="color:white">Payment Status:<?php 
				if ($a[0]->Payment_status != 'Success' || $a[0]->Payment_status != '')
			{
				
					echo $a[0]->Payment_status;
				}
				else
				{
					echo "Paid";	
				}
				
				?></span>
			

			<br>
<?php 
				if ($a[0]->Payment_status == 'Success')
			{
					?>
			<span style="color:white">Payment Date Time:<?php print_r($a[0]->Payment_datetime);?></span>
			<br>

			<span style="color:white">Bank Reference No:<?php print_r($a[0]->Bank_ref_no);?></span>
			<br>
			
			
			<span style="color:white">Transaction Id:<?php print_r($a[0]->tracking_id);?></span>
			<br>
			
			
			<?php
					
				}
			?>

			<?php
			if ($a[0]->Payment_status == 'Pending' || $a[0]->Payment_status == ''  )
			{
			?><br>
<br>

			   <button type="button"  value="submit" class="button-form" onClick="paynow('<?php print_r($a[0]->inn_id);?>','<?php print_r($a[0]->Email_id);?>');">Pay Now</button>
			<?php 
			}
			?>
<input type="hidden"  name="order_id" id="order_id" value="<?php print_r($a[0]->inn_id);?>" required />
<input type="hidden"  name="Email_id" id="Email_id" value="<?php print_r($a[0]->Email_id);?>" required />


