
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin Sketch">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Londrina Sketch"> 
-->
<style>
	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}

	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.topnav a.active {
	  background-color: #04AA6D;
	  color: white;
	}

	.topnav .icon {
	  display: none;
	}

	@media screen and (max-width: 600px) {
	  .topnav a:not(:first-child) {display: none;}
	  .topnav a.icon {
		float: right;
		display: block;
	  }
	}

	@media screen and (max-width: 600px) {
	  .topnav.responsive {position: relative;}
	  .topnav.responsive .icon {
		position: absolute;
		right: 0;
		top: 0;
	  }
	  .topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
	  }
	}
	.lable{
	 float: right;
	}
	.input{
		height:30px;
		width:100%;
		background-color:#F0F0F0;
		margin-top:10px;
		border-color:#06283D;
		border:2px solid #06283D;
		border-radius:5px;
		
	}
	.input1{
		height:30px;
		width:100%;
		background-color:#F0F0F0;
		margin-top:10px;
		border-color:white;
		border:2px solid #06283D	;
		border-radius:5px
	}
	table, th, td {
	  border:1px solid transparent;
	  border-collapse: collapse;
	}

	.paddleft{
		border:2px solid transparent;
		width:10%;
		height:50px;
		float:left
	}
	.tab{
		border:1px solid transparent;
		float:left;
		width:45%;
		height:450px;
		
	}
	.tab2{
		border:1px solid transparent;
		float:left;
		width:45%;
		height:350px
	}

	.shadow{
		border:2px solid red;
		float:left;
		width:80%;
		height:700px; 
		border: 0px solid;
		background-color:white;
		padding: 10px;
		box-shadow: 5px 10px 8px 10px #888888;
	}
	.div2{
		width:120%;
		text-align:right	
	}
	@media screen and (max-width: 1100px) {
		.div2{
			width:70%;
			text-align:right	
		}
		.tab{
			border:1px solid transparent;
			float:left;
			width:45%;
			height:650px
		}
		.tab2{
			border:1px solid transparent;
			float:left;
			width:45%;
			height:550px
		}
		.paddleft{
			border:1px solid transparent;
			width:5%;
			height:50px;
			float:left
		}
	}
	@media screen and (max-width: 1000px) {
		.table, th, td {
			font-size:15px
		}
		.input1{
			height:30px;
			width:100%;
			background-color:#F0F0F0;
			margin-top:10px;
			border-color:white;
			border:2px solid grey;
			border-radius:5px;
			float:left
		}
		.tab{
			border:1px solid transparent;
			float:left;
			width:90%;
			height:50;
		}
		.tab2{
			border:1px solid transparent;
			float:left;
			width:90%;
			height:550;
		}
		.paddleft{
			border:1px solid transparent;
			width:5%;
			height:800px;
			float:left
		}
		.shadow{
			border:2px solid red;
			float:left;
			width:80%;
			height:1540px;
			border: 0px solid;
			background-color:white;
			padding: 10px;
			box-shadow: 5px 10px 8px 10px #888888;
		}
	}

	@media screen and (max-width: 850px) {
		.table, th, td {
			font-size:12px;
		}


		td {
		  text-align: right;
		  padding:5px
		}
	}
	#example2 {
	  border: 1px solid;
	  padding: 10px;
	  box-shadow: 5px 10px #888888;
	}
	@media screen and (max-width: 600px) {
		.input1{
			height:30px;
			width:90%;
			background-color:#F0F0F0;
			margin-top:10px;
			border-color:white;
			border:2px solid grey;
			border-radius:5px;
			float:left
		}
	}
	@media screen and (max-width: 400px) {
		.input1{
		height:30px;
		width:40%;
		background-color:#F0F0F0;
		margin-top:10px;
		border-color:white;
		border:2px solid grey;
		border-radius:5px;float:left
		}
	}
</style>
</head>
<body >


<div id="tabledata">
	</div>
	<div style="border:0px solid red;
	width:100%;
	height:50px;
	text-align:center;
	font-family:Londrina Sketch;  	
	font-size:20px">
		<h1 style="color:#06283D">Innovation Form
	</div>
	<div class="paddleft"></div>
	<div class="shadow" >
	<div  class="tab" style="margin-top:40px;text-align:right" >

		<table style="width:100%">

			<form action="<?=base_url;?>index.php/Welcome/inno_insert" method="post"  enctype="multipart/form-data"  >
				 <tr>
					<td><label class="lable" >Choose Your Category:</label></td>
					<td>	  
						<select id="cars" name="cars" style="height:35px;width:100%;background-color:#F0F0F0;margin-top:10px;border-color:black;border:2px solid #06283D;border-radius:5px"  required>
							<option value="volvo">class 5-8</option>
							<option value="saab">class 9-12</option>
							<option value="fiat">undergratuate</option>
							<option value="audi">any professionals</option>
						</select>
					</td>
						
				</tr>
				<tr>
					<td><label class="lable">Title of Innovation : <span style="color: red;">*</span></label></td>
					<td> <input type="text" id="TitleofInnovation" name="TitleofInnovation" placeholder="Title of Innovation" class="input"  required></td>
				</tr>
				<tr>
				    <td><label class="lable">Field of Innovation :<span style="color: red;">*</span> </label></td>
					<td style="text-align:left">  
						<div class="checkbox-group required">
							<input type="checkbox" id="Field1" name="Field1" value="Agriculture" >
							<label for="Agriculture">Agriculture</label><br>
							<input type="checkbox" id="Field2" name="Field2" value="Education">
							<label for="Education"> Education</label><br>
							<input type="checkbox" id="Field3" name="Field3" value="Healthcare">
							<label for="Healthcare"> Healthcare</label><br>
							  <input type="checkbox" id="Field4" name="Field4" value="SafetyandSecurity">
							<label for="Safety & Security">Safety and Security</label><br>
							  <input type="checkbox" id="Field5" name="Field5" value="Transportation">
							<label for="Transportation"> Transportation</label><br>
							  <input type="checkbox" id="Field6" name="Field6" value="Defence">
							<label for="Defence">Defence</label><br>
							  <input type="checkbox" id="Field7" name="Field7" value="InformationandCommunicationTechnology">
							<label for="InformationandCommunicationTechnology"> Information and Communication Technology</label><br>  
							<input type="checkbox" id="Field8" name="Field8" value="Manufacturing">
						   
						   <label for="vehicle3"> Manufacturing</label><br>
							  <input type="checkbox" id="Field9" name="Field9" value="Construction">
							<label for="vehicle3"> Construction</label><br>
							  <input type="checkbox" id="Field10" name="Field10" value="IoTandElectronics">
							<label for="vehicle3"> IoT and Electronics</label><br>
								<input type="checkbox" id="Field11" name="Field11" value="AI-ML">
							<label for="vehicle3"> AI/ML</label>
						</div>
						 
                     </td>
				</tr>

				  
				  
				<tr>
					<td><label class="lable">Name of Team Leader:<span style="color: red;">*</span>  </label></td>
					<td> <input type="text" id="teamleadname" name="teamleadname" placeholder="Name of Team Leader " class="input"  required></td>
				</tr>
				<tr>
					<td><label class="lable">Contact No. (Team Leader)  :<span style="color: red;">*</span></label></td>
					<td> <input type="text" id="conatctnoteamlead" name="conatctnoteamlead" placeholder="Contact No. (Team Leader)" class="input"  required></td>
	            </tr>      
				<tr>
					<td><label class="lable">Alternate Contact No. (Any Member):<span style="color: red;">*</span> </label></td>
					<td> <input type="text" id="altconatct" name="altconatct" placeholder="Alternate Contact No. :" class="input"  required></td>
				</tr>    
				 <tr>
					<td><label class="lable">Email Id (Team Leader):<span style="color: red;">*</span> </label></td>
					<td> <input type="text" id="leademailid" name="leademailid" placeholder="Email Id (Team Leader): " class="input"  required> </td>
				</tr>
				<tr>
					<td><label class="lable">Alternate Email Address (Any Member):<span style="color: red;">*</span>	 </label></td>
				    <td> <input type="text" id="altemailid" name="altemailid" placeholder="Alternate Email Address (Any Member) " class="input"  required></td>
				 </tr>
				<tr>
					<td><label class="lable">Name of Team Member - 1:	 </label></td>
				    <td> <input type="text" id="membername1" name="membername1" placeholder="Name of Team Member - 1: " class="input"  ></td>
				</tr>
				  


		</table>
	</div>
	<div class="tab2" style="margin-top:40px "  >

		<table class="div2">
		
				  
<tr>
					<td><label class="lable">Name of Team Member - 2:	 </label></td>
				    <td> <input type="text" id="membername2" name="membername2" placeholder="Name of Team Member - 2: " class="input"  ></td>
				</tr>
				
				
				<tr>
					<td><label class="lable">Name of Team Member - 3:	 </label></td>
				    <td> <input type="text" id="membername3" name="membername3" placeholder="Name of Team Member - 3: " class="input"  ></td>
				</tr>
				
				<tr>
					<td><label class="lable">Name of Mentor:<span style="color: red;">*</span>	 </label></td>
				    <td> <input type="text" id="mentorname" name="mentorname" placeholder="Name of Mentor " class="input"  required></td>
				</tr>
				
				<tr>
					<td><label class="lable">Contact No. of Mentor:	<span style="color: red;">*</span> </label></td>
				    <td> <input type="text" id="conatctnoofmentor" name="conatctnoofmentor" placeholder="Contact No. of Mentor	 " class="input"  required></td>
				</tr>
				
				<tr>
					<td><label class="lable">Email id of Mentor:<span style="color: red;">*</span>	 </label></td>
				    <td> <input type="email" id="eamilofmentor" name="eamilofmentor" placeholder="Email id of Mentor: " class="input"  required></td>
				</tr>
				
				<tr>
					<td><label class="lable">Describe your innovation (Minimum 500 words):<span style="color: red;">*</span>	 </label></td>
				    <td> 
				<!--	<textarea  name="w3review" rows="20" cols="50" class="input" placeholder="Describe your innovation " required></textarea> -->
									 <textarea
									 minlength="1000"
									 class="input"
					 class="form-control"
					 name="message"
					 id="message"
					 cols="30"
					 rows="7"
					 required
					 placeholder="Describe here"
					 style="float:left"
					  
					 required
				   ></textarea>	
					</td>
				</tr>
				
				
				<tr>
					<td><label class="lable">Upload a video of Innovation on Youtube and share the link below (Max 5 min) :<span style="color: red;">*</span>	 </label></td>
				    <td> <input type="text" id="videolink" name="videolink" placeholder="Youtube link " class="input"  required></td>
				</tr>
				
				
			<tr>
				<td><label class="lable">Have you filed patent?:<span style="color: red;">*</span></label></td>
			 	<td style="float:left"> <input type="radio" id="yes" name="filedpatent" value="yes" required>
				  <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="filedpatent" value="no">
				  <label for="no">No	</label>
				</td>
			</tr>	  
							  

			<tr>
				<td><label class="lable">If yes, Provide Patent Application Number (Added Advantage during Evaluation)</label></td>
				<td> <input type="text" id="fundinfamount" name="fundinfamount" placeholder="funding amount and funding agency" class="input1"  ></td>
			</tr>     
			 <tr>
				<td><label class="lable">Have you received grant of patent?:<span style="color: red;">*</span> </label></td>
				<td style="float:left"> <input type="radio" id="yes" name="investors" value="yes" required>
				  <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="investors" value="no">
				  <label for="no">No	</label>
				
				</td>
			 </tr> 

	  
			<tr>
				<td><label class="lable">If yes, upload Patent Certificate:	</label></td>
				<td>   <input type="file" id="patentcertificate" name="patentcertificate" style="float:left"></td>
			</tr>
	  
  

			<tr>
				<td><label class="lable">If yes, provide details of Award/Awards (Added Advantage during evaluation) </label></td>
				<td>   <input type="text" id="awardsdetails" name="awardsdetails" placeholder=" details of Award/Awards "class="input1"></td>
			</tr>
			<tr>
				<td style="height:120px"colspan="2">
						  <input type="checkbox" id="termscond" name="termscond" value="termscond" required>
				
						  I agree with all the the terms & conditions and I have read Guidelines, Privacy Policy, Information Policy and No Refund Policy mentioned on our website innovationsrus.in
</td>
			</tr>
             <tr>
				<td style="text-align:left;padding-top:30px">
				<input type="submit"  style="float:right;height:40px;width:120px;background-color:#06283D;color:white;border-radius:5px" >		
				</td>
			</tr>
			</form>
		</table>
	</div>

	</div>
	</body>
	<script>
		$('div.checkbox-group.required:checkbox:checked').length > 0

	 </script>
<script language="javascript" type="text/javascript">
	
function innovation() 
{ 

var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/inno_insert";
var vars = "";
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) {
    var return_data = hr.responseText;
	alert("Thank you. Your information saved successfully.");
	   document.getElementById('tabledata').innerHTML=return_data;

	   window.location = "<?=base_url;?>index.php/Welcome/details";
}
}
hr.send(vars);
document.getElementById('tabledata').innerHTML="Please Wait";
}
</script>

</html>
