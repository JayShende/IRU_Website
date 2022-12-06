
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

   
  </head>
	<style>
		body{
			background-color: #16157F
		}
	</style>
	<script>  
//user-defined function to download CSV file  
function downloadCSV(csv, filename) {  
    var csvFile;  
    var downloadLink;  
     
    //define the file type to text/csv  
    csvFile = new Blob([csv], {type: 'text/csv'});  
    downloadLink = document.createElement("a");  
    downloadLink.download = filename;  
    downloadLink.href = window.URL.createObjectURL(csvFile);  
    downloadLink.style.display = "none";  
  
    document.body.appendChild(downloadLink);  
    downloadLink.click();  
}  
  
//user-defined function to export the data to CSV file format  
function exportTableToCSV(filename) {  
   //declare a JavaScript variable of array type  
   var csv = [];  
   var rows = document.querySelectorAll("table tr");  
   
   //merge the whole data in tabular form   
   for(var i=0; i<rows.length; i++) {  
    var row = [], cols = rows[i].querySelectorAll("td, th");  
	   //cols.bold();
    for( var j=0; j<cols.length; j++)  
       row.push(cols[j].innerText);  
    csv.push(row.join(","));  
   }   
   //call the function to download the CSV file  
   downloadCSV(csv.join("\n"), filename);  
}  
</script>  
  <body>
	  
    <header>
		 <button onclick="exportTableToCSV('startup.csv')"> Export File </button>
		<?php /*?><a href="<?php echo base_url;?>index.php/AdminController/createExcel" class="btn btn-success" style="float: left;">Export All</a><?php */?>
<h1 style="color: white" align="center">Startup Candidate Details</h1>
    </header>
    <main class="main">
          <table bordercolor="rgba(22,17,17,1.00)" class="table-bordered"  bordercolordark="#rgba(0,0,0,1.00)"  style="background: rgba(255,255,255,1.00)">
  <thead>
    <tr>
      <th scope="col">Startup Id</th>
      <th scope="col">TeamName</th>
      <th scope="col">Category</th>
      <th scope="col">StartupName</th>
	  <th scope="col">LeaderName</th>
      <th scope="col">Contact</th>
      <th scope="col">AltContact</th>
      <th scope="col">LeaderEmail</th>
      <th scope="col">Name1</th>
      <th scope="col">Name2</th>
      <th scope="col">Name3</th>
      <th scope="col">Incubator</th>
      <th scope="col">GovtFund</th>
      <th scope="col">GovtDetail</th>
      <th scope="col">Investment</th>
      <th scope="col">InvestmentDetail</th>
	  <th scope="col">Desc_Startup</th>
      <th scope="col">Udyam_Cert_Registration</th>
      <th scope="col">DPIIT_RegNo</th>
      <th scope="col">DPIIT_Certificate</th>
      <th scope="col">Revenue_generated</th>
      <th scope="col">Startup_Certificate</th>
      <th scope="col">Billing_Address</th>
      <th scope="col">Billing_City</th>
      <th scope="col">Billing_State</th>
      <th scope="col">Billing_Pincode</th>
      <th scope="col">Payment_status</th>
	  <th scope="col">Bank_ref_no</th>
      <th scope="col">Payment_datetime</th>
      <th scope="col">tracking_id</th>
      <th scope="col">order_detail</th>
      
    </tr>
  </thead>
  <tbody>
	 <?php foreach($login as $data){?>
	
    <tr>
      <td><?php echo $data->Startup_id;?></td>
     <td><?php echo $data->TeamName;?></td>
     <td><?php echo $data->Category;?></td>
     <td><?php echo $data->StartupName;?></td>
     <td><?php echo $data->LeaderName;?></td>
     <td><?php echo $data->Contact;?></td>
     <td><?php echo $data->AltContact;?></td>
     <td><?php echo $data->LeaderEmail;?></td>
     <td><?php echo $data->Name1;?></td>
     <td><?php echo $data->Name2;?></td>
     <td><?php echo $data->Name3;?></td>
     <td><?php echo $data->Incubator;?></td>
     <td><?php echo $data->GovtFund;?></td>
     <td><?php echo $data->GovtDetail;?></td>
     <td><?php echo $data->Investment;?></td>
     <td><?php echo $data->InvestmentDetail;?></td>
   <td><div style="overflow: scroll; height:100px"><?php echo $data->Desc_Startup;?></div></td>
	   
	   
		<td scope="row"><a href="<?php echo base_url; ?>uploadsstartup/<?php echo $data->Startup_id;?>/<?php echo $data->Udyam_Cert_Registration;?>" style="background-color: aliceblue" target="_blank"><?php echo $data->Udyam_Cert_Registration;?></a></td>
    
     <td><?php echo $data->DPIIT_RegNo;?></td>
		<td scope="row"><a href="<?php echo base_url; ?>uploadsstartup/<?php echo $data->Startup_id;?>/<?php echo $data->DPIIT_Certificate;?>" style="background-color: aliceblue" target="_blank"><?php echo $data->DPIIT_Certificate;?></a></td>
     
     <td><?php echo $data->Revenue_generated;?></td>
		<td scope="row"><a href="<?php echo base_url; ?>uploadsstartup/<?php echo $data->Startup_id;?>/<?php echo $data->Startup_Certificate;?>" style="background-color: aliceblue" target="_blank"><?php echo $data->Startup_Certificate;?></a></td>
   
     <td><?php echo $data->Billing_Address;?></td>
     <td><?php echo $data->Billing_City;?></td>
     <td><?php echo $data->Billing_State;?></td>
     <td><?php echo $data->Billing_Pincode;?></td>
     <td><?php echo $data->Payment_status;?></td>
     <td><?php echo $data->Bank_ref_no;?></td>
     <td><?php echo $data->Payment_datetime;?></td>
     <td><?php echo $data->tracking_id;?></td>
     <td><?php echo $data->order_detail;?></td>
    
      
    </tr>
    <?php } ?>
  </tbody>
</table>
    </main>
  </body>
</html>
