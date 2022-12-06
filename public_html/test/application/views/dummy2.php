<!DOCTYPE html>
<html>
	<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
$(function() {
  $('input').floatlabel({labelEndTop:0});
});
</script>
<script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
<style>
body{
  /* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#2F2727));

  /* Safari 5.1+, Chrome 10+ */
    background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);

  /* Firefox 3.6+ */
    background: -moz-radial-gradient(circle, #1a82f7, #2F2727);

  /* IE 10 */
    background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
    height:600px;
}
	.lable{
		float: left;
	}
	.input{
		float: right;
		padding: 1px;
		margin-top: 5px;
	}
	
	.input4{
		float: left;
		margin-left: 115px;
		padding: 1px;
		margin-top: 5px;
	}
	.input2
	{
		margin-right: 70px;
		padding: 1px;
		margin-top: 5px;
	}
	.input1{
		float: right;
		padding: 1px;
		margin-top: 5px;
	}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
	
label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
</style>
<div class="container">
        <div class="row centered-form">
        <div class="col-lg-8 col-lg-offset-2 " align="center">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h2 ><b>Innovation Form</b></h2>
			 			</div>
			 			<div class="panel-body">
			    		
							<form action="<?=base_url;?>index.php/Welcome/inno_insert" method="post"  role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			               <label class="lable" >Choose Your Category:</label>
						  
						<select id="cars" name="cars" style="height:35px;width:50%;background-color:#F0F0F0;margin-top:0px;border-color:black;border:2px solid #06283D;border-radius:5px"  required>
							<option value="volvo">class 5-8</option>
							<option value="saab">class 9-12</option>
							<option value="fiat">undergratuate</option>
							<option value="audi">any professionals</option>
						</select>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Title of Innovation : <span style="color: red;">*</span></label>
					 <input type="text" id="TitleofInnovation" name="TitleofInnovation" placeholder="Title of Innovation" class="input"  required>
			    					</div>
			    				</div>
			    			</div>

								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Field of Innovation :<span style="color: red;">*</span> </label>
			
						<div class="checkbox-group required" style="text-align:left" >
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
						 
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Name of Team Leader:<span style="color: red;">*</span>  </label>
					 <input type="text" id="teamleadname" name="teamleadname" placeholder="Name of Team Leader " class="input"  required>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Contact No. (Team Leader)  :<span style="color: red;">*</span></label>
					 <input type="text" id="conatctnoteamlead" name="conatctnoteamlead" placeholder="Contact No. (Team Leader)" class="input"  required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Alternate Contact No. (Any Member):<span style="color: red;">*</span> </label>
					 <input type="text" id="altconatct" name="altconatct" placeholder="Alternate Contact No. :" class="input"  required>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Email Id (Team Leader):<span style="color: red;">*</span> </label>
					 <input type="text" id="leademailid" name="leademailid" placeholder="Email Id (Team Leader): " class="input"  required> 
			    					</div>
			    				</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Alternate Email Address (Any Member):<span style="color: red;">*</span>	 </label>
				     <input type="text" id="altemailid" name="altemailid" placeholder="Alternate Email Address (Any Member) " class="input"  required> 
			    					</div>
			    				</div>
		</div>
	<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Billing Address :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_Address" name="Billing_Address" placeholder="Billing Address" class="input"  required>
			    					</div>
			    				</div>
								
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Billing City :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_City" name="Billing_City" placeholder="Billing City" class="input"  required>
			    					</div>
			    				</div>
		</div>
								<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Biling State :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_State" name="Billing_State" placeholder="Billing State" class="input"  required>
			    					</div>
			    				</div>
								
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Billing Zip :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_Pincode" name="Billing_Pincode" placeholder="Billing_Pincode" class="input"  required>
			    					</div>
			    				</div>
								
								</div>
			    				<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Name 1: </label>
					 <input type="text" id="membername1" name="membername1" placeholder="Name of Team Member - 1: " class="input4" > 
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Name 2:	</label>
				     <input type="text" id="membername2" name="membername2" placeholder="Name of Team Member - 2: " class="input4" >
			    					</div>
			    				</div>	</div>
			    				<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Name 3:	 </label>
				     <input type="text" id="membername3" name="membername3" placeholder="Name of Team Member - 3: " class="input4"  >
			    					</div>
			    				</div>
			    			</div>
			    			<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Name of Mentor:<span style="color: red;">*</span>	 </label>
				     <input type="text" id="mentorname" name="mentorname" placeholder="Name of Mentor " class="input"  required>
			    					</div>
			    				</div>
								
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Contact No. of Mentor:	<span style="color: red;">*</span> </label>
				     <input type="text" id="conatctnoofmentor" name="conatctnoofmentor" placeholder="Contact No. of Mentor	 " class="input"  required>
			    					</div>
			    				</div>
		</div>
								<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Email id of Mentor:<span style="color: red;">*</span>	 </label>
				     <input type="email" id="eamilofmentor" name="eamilofmentor" placeholder="Email id of Mentor: " class="input"  required>
			    					</div>
			    				</div>
			</div>
			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Describe your innovation (Minimum 500 words):<span style="color: red;">*</span>	 </label>
				     <br>
				<!--	<textarea  name="w3review" rows="20" cols="50" class="input" placeholder="Describe your innovation " required></textarea> -->
									 <textarea
									 minlength="1000"
									 
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
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    					<label class="lable">Upload a video of Innovation on Youtube and share the link below (Max 5 min) :<span style="color: red;">*</span>	 </label>
				     <input type="text" id="videolink" name="videolink" placeholder="Youtube link " class="input"  required>
				
			    					</div>
			    				</div>
					</div>
			    				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Have you filed patent?:<span style="color: red;">*</span></label>
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="yes" name="filedpatent" value="yes" required>
				  <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="filedpatent" value="no">
				  <label for="no">No	</label>
			    					</div>
			    				</div>
			    			</div>
								
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If yes, Provide Patent Application Number (Added Advantage during Evaluation)</label>
				 <input type="text" id="fundinfamount" name="fundinfamount" placeholder="funding amount and funding agency" class="input1"  >
			    					</div>
			    				</div>
					</div>
			    					
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Have you received grant of patent?:<span style="color: red;">*</span> </label>
				 <input type="radio" id="yes" name="investors" value="yes" required>
				  <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="investors" value="no">
				  <label for="no">No	</label>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    				
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If yes, upload Patent Certificate: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				  <input type="file" id="patentcertificate" name="patentcertificate" style="float:left">
			    					</div>
			    				</div>
					</div>
			    					
			    			
			    				
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If yes, provide details of Award/Awards (Added Advantage during evaluation) </label>
				   <input type="text" id="awardsdetails" name="awardsdetails" placeholder=" details of Award/Awards "class="input1">
			    					</div>
			    				</div>
			    					</div>

			    			<br>
								<br>
							
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="checkbox" id="termscond" name="termscond" value="termscond" required>
				
						  I agree with all the the terms & conditions and I have read Guidelines, Privacy Policy, Information Policy and No Refund Policy mentioned on our website innovationsrus.in
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    				
			    			
			    			<br>
								<br>
								<br>
			    			<input type="submit"  style="float:center;height:40px;width:120px;background-color:#06283D;color:white;border-radius:5px" onClick="startup();"  class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
<script>
		$('div.checkbox-group.required:checkbox:checked').length > 0

	 </script>
<script language="javascript" type="text/javascript">
	
function innovation() 
{ 
alert("Thank you");
var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/inno_insert";
var vars = "";
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function()
{
   if(hr.readyState == 4 && hr.status == 200) {
    var return_data = hr.responseText;
	document.getElementById('tabledata').innerHTML=return_data;
	window.location = "http://127.0.0.1/innovationsrus/index.php/Welcome/details";
}
}
hr.send(vars);
document.getElementById('tabledata').innerHTML="Please Wait";
}
</script>
</html>
