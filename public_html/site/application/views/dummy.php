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
			    		<h2 ><b>StartUp Form</b></h2>
			 			</div>
			 			<div class="panel-body">
			    		
							<form action="<?=base_url;?>index.php/Welcome/startupinsert" method="post"  role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			               <label class="lable">Team Name :<span style="color: red;">*</span> </label>
					<input type="text" id="startupname" name="startupname" placeholder="Team Name" class="input"  required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable" >Choose Your Category:<span style="color: red;">*</span></label>
						  
					<select id="cars" name="cars" style="height:35px;width:50%;background-color:#F0F0F0;margin-top:0px;border-color:black;border:2px solid #06283D;border-radius:5px"  required>
						
						<option value="volvo">class 5-8</option>
						<option value="saab">class 9-12</option>
						<option value="fiat">undergratuate</option>
						<option value="audi">any professionals</option>
					</select>
			    					</div>
			    				</div>
			    			</div>

								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Name of Startup :<span style="color: red;">*</span> </label>
					 <input type="text" id="startupname" name="startupname" placeholder="Name of Startup" class="input"  required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Name of Team Leader :<span style="color: red;">*</span></label>
					 <input type="text" id="teamleadname" name="teamleadname" placeholder="Name of Team Leader :" class="input"  required>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">ContactNo<span style="color: red;">*</span></label>
					 <input type="text" id="conatct" name="conatct" placeholder="Contact No of TeamLeader" class="input"  required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Alternate Contact No.  :<span style="color: red;">*</span></label>
					 <input type="text" id="alternatecontact" name="alternatecontact" placeholder="Alternate Contact No." class="input"  required>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Email Id  :<span style="color: red;">*</span> </label>
					 <input type="email" id="email" name="eamil" placeholder="Email Id (Team Leader) :" class="input"  required>
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Billing Address :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_Address" name="Billing_Address" placeholder="Billing Address" class="input"  required>
			    					</div>
			    				</div>
								</div>
								<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Billing City :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_City" name="Billing_City" placeholder="Billing City" class="input"  required>
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label class="lable">Biling State :<span style="color: red;">*</span> </label>
					 <input type="text" id="Billing_State" name="Billing_State" placeholder="Billing State" class="input"  required>
			    					</div>
			    				</div>
								</div>
								<div class="row">
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
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Have you incubated at any incubator?:<span style="color: red;">*</span></label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" id="yes" name="incubator" value="yes"  required>
					 <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="incubator" value="no">
				  <label for="no">No	</label>
			    					</div>
			    				</div>
					</div>
			    				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Have you receivedany funding from Government?:<span style="color: red;">*</span></label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <input type="radio" id="yes" name="govermentfunding" value="yes">
				  <label for="yes">Yes</label>	
				  <input type="radio" id="no" name="govermentfunding" value="no">
				  <label for="no">No	</label>
			    					</div>
			    				</div>
			    			</div>
								
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If yes, provide details about funding amount and funding agency:</label>
				 <input type="text" id="fundinfamount" name="fundinfamount" placeholder="funding amount and funding agency" class="input2" >
			    					</div>
			    				</div>
					</div>
			    					
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Have you received any investment from angel investors?:<span style="color: red;">*</span> </label>
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
			    						<label class="lable">If yes, provide details about funding amount and name of angel<br>investor</label>
				 <input type="text" id="fundinfamount" name="fundinfamount" placeholder="funding amount and name of angel investor" class="input2" >
			    					</div>
			    				</div>
					</div>
			    					
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Describe your startup (Minimum 500 words):<span style="color: red;">*</span> </label>
				
					 <!-- <input type="text" id="Describe" name="Describe" placeholder="Describe your startup" class="input1" required> -->
					 <textarea
					 minlength="1000"
					 class="form-control"
					 name="message"
					 id="message"
					 cols="30"
					 rows="7"
					 required
					 placeholder="Describe here"
					 required
				   ></textarea>
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    				
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Startup Incorporation Certificate:	<span style="color: red;">*</span>	 </label>
				   <input type="file" id="myFile" name="filename1" class="input1" required>
			    					</div>
			    				</div>
			    					</div>
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">Udyam Registration Certificate:</label>
				   <input type="file" id="Udyam" name="filename2" class="input1">
			    					</div>
			    				</div>
			    			</div>
			    			
								
			    				
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If you have registered at DPIIT, then enter DPIIT Registration<br>Number</label>
					 <input type="text" id="DPIIT" name="DPIIT" placeholder="enter DPIIT Registration Number" class="input2">
			    					</div>
			    				</div>
			    					</div>
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="lable">If you have registered at DPIIT, then upload DPIIT Certificate</label>
				   <input type="file" id="DPIITCertificate" name="DPIITCertificate" class="input1">
			    					</div>
			    				</div>
			    			</div>
			    				
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    			<div class="form-group">
			    				<label class="lable">Enter Revenue generated during last 3 year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				 <input type="text" id="Revenue" name="Revenue" placeholder="Enter Revenue generated(3yrs)" class="input2" >
			    			</div>

			    			</div></div>	
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
<script language="javascript" type="text/javascript">
	
function startup() 
{ 
alert("Thank you");
var hr = new XMLHttpRequest();
var url = "<?=base_url;?>index.php/Welcome/startupinsert";
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
