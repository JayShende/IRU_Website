<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="<?=base_url;?>public_html/style-form.css">
  </head>
	<style>
	h1 {
  color: white;
		margin-top: 20px
}
		.container{
			width: 40%;
			margin-top: 30px;
			
		}
		input[type=text] {
  width: 70%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;
}
	</style>
  <body>
    <header>
<h1 align="center" >Startup Application Status</h1>
    </header>
    <main class="main">
		<div class="container">
			
		
			
		<form >
         
            Order Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="order_id" id="order_id" required />
           
         <br>
          Email:
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="email" id="email" required />
             <br>
          <button type="button"  value="submit" class="button-form" onClick="startupstatus();">Submit</button>
          
		
		
        </form> 


</main>


<div class="container">

        <div class="col-lg-12 feature-box" style="color: rgba(244,194,195,1.00)" id="infoMessage"></div>
			 <div class="col-lg-12 feature-box" style="color: rgba(244,194,195,1.00); "  id="payment"></div>
			
</div>
	   


 <script>
	function startupstatus(){

		var order_id= document.getElementById('order_id').value;
		//alert(a);
		var email= document.getElementById('email').value;
		//alert(b);
		var vars = "order_id="+order_id+"&email="+email;
var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/checkstartup?"+vars;
 
		//alert(url);
		
hr.open("GET", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
	   //var obj = JSON.parse(return_data);
	 // alert(obj.Payment_status);
	   document.getElementById('infoMessage').innerHTML = return_data;

     }
    }
hr.send(vars);
	document.getElementById('infoMessage').innerHTML = "Please wait...." ;
	 document.getElementById('payment').innerHTML = "";

}
	 
	 	function paynow(a,b)
	{

		var order_id= a;
		//alert(a);
		var email= b;
		//alert(b);
		var vars = "order_id="+order_id+"&email="+email;
var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/startuppendingpayments?"+vars;
//alert(url);
hr.open("GET", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
	  // var obj = JSON.parse(return_data);
	 // alert(obj.Payment_status);
	   document.getElementById('payment').innerHTML = return_data;
		document.getElementById('infoMessage').innerHTML = "Please confirm billing information" ;

   }
    }
hr.send(vars);
	document.getElementById('payment').innerHTML = "" ;
		document.getElementById('infoMessage').innerHTML = "Please wait...." ;

}
	 
	 
	</script>
	  
	 

</html>

</html>