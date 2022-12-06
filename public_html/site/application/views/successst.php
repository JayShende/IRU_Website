<?php include('../payment/Crypto.php')?>


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

</head>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

	

<body>

<section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid">
      <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom:0 ;">
          <a class="navbar-brand" href="<?php echo base_url;?>"><img src="<?=base_url;?>public_html/images/IRU logo.png" width="110px" height="110px" >Innovations 'R' Us</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          </div>
        </nav>
     
        <!-- Title -->
<div id="tabledata"></div>
        <div class="row" style="margin: 0;">
          <div class="col-lg-12 col-md-12 col-sm-12">
			  
			  
			  
			  
			  
            
			  
			  
			  
			  
             
				  <br><br>
				<?php

	error_reporting(0);
	
	$workingKey='99AA7A5B052D13A5AEF713881A5A0405';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<h5>Your payment have been successfully done!</h5>
		<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will update you soon.";
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br><h5>Your payment has been declined</h5><br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo '<br><br> <div class="container-fluid">';

				  
if($order_status==="Success")
{
$dataarray = array();
echo "<table cellspacing=4 cellpadding=4>";
for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	//echo '<tr><td>'.$i.'</td><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
		$dataarray[$i] = $information[1];
	}
	echo "</table><br>";
	echo "</center>";
?>
			<!--	  
				  <input type="button" value="savedetails" onClick="savedetail();">
				 
			-->	  
				  <?php
				  }
					  ?>
			  </div>
</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
	
		//savedetail("helo");
		
function savedetail()
{

var a = '<?php echo json_encode($dataarray);?>';
var vars = "a="+a;
//	alert("vars="+a);
var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/save_startup?"+vars;
	//alert(url);
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) 
   {
        var return_data = hr.responseText;
	   //alert(return_data);
	    document.getElementById('tabledata').innerHTML=return_data;
	  
	 }
    }
hr.send(vars);
document.getElementById('tabledata').innerHTML="Please Wait";
}
	
	
savedetail();
			
			
			
			
	</script>
	
	
	
</body>
</html>
