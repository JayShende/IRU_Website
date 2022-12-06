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
		.label1{
		color: black;
			float: left;
		}
		.form1{
			width: 50%;
		}
		.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
	</style>
	
  <body>
	  
   
	  
    <main class="main">
	<section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom:0 ;">
          <a class="navbar-brand" href=""><img src="<?=base_url;?>public_html/images/IRU logo.png" width="110px" height="110px" >Innovations 'R' Us</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </nav>
		
    
    <!-- Section: Design Block -->
<section class="text-center text-sm-start" align="center">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
	<div id="tabledata">
  <div class="card w-50" align="center">
	  
    <form class="m-5" action="<?=base_url;?>index.php/AdminController/login"  method="post" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 ">
				 <label class="float-left" for="form2Example1">Email address</label>
              <input type="email" name="email" id="email" class="form-control w-75" required/>
              <span style="color:red;"></span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
				 <label class="float-left" for="form2Example2">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" name="password" id="password" class="form-control w-75" required/>
             <span style="color:red;"></span>
  </div>
         <div id="infoerr_message" ><span style="color:red;"><?php echo $this->session->flashdata('err_message');?></span> 
		</div>

          
            

            <!-- Submit button -->
           <button type="submit" class="btn btn-primary float-left" >Sign in</button>

          </form>

        </div>
      </div>
    </div>

</section>

    </div>  
  </section>	
</main>
	</body>
<script language="javascript" type="text/javascript">
	function login()
{ 
	alert('login');
 var email = document.getElementById("email").value;
 var password = document.getElementById("password").value;
var hr = new XMLHttpRequest();
  var vars = "email="+email+"&password="+password;
 alert(vars);
var url = "<?=base_url;?>index.php/AdminController/login?"+vars;

 alert(url);
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
  document.getElementById('tabledata').innerHTML=return_data;
   }
    }
  hr.send(vars);
  document.getElementById('tabledata').innerHTML="Please Wait";
}

	</script>
</html>
