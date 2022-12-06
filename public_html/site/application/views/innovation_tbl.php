
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
      rel="stylesheet"/>

 
  </head>
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
	<style>
		body{
			background-color: #16157F
		}
	</style>
  <body>
	  
    <header>
		 <button onclick="exportTableToCSV('innovation.csv')"> Export File </button>
		<?php /*?><a href="<?php echo base_url; ?>index.php/ExcelController/action" class="btn btn-success" style="float: left;">Export All</a><?php */?>
<h1 style="color: white" align="center">Innovation Candidate Details</h1>
    </header>
    <main class="main">
        <table bordercolor="rgba(22,17,17,1.00)" class="table-bordered"  bordercolordark="#rgba(0,0,0,1.00)"  style="background: rgba(255,255,255,1.00)">
  <thead>
    <tr>
      <th scope="col">Innovation Id</th>
      <th scope="col">Category</th>
      <th scope="col">Title_Innovation</th>
      <th scope="col">Field</th>
	  <th scope="col">TeamLeader</th>
      <th scope="col">Contact</th>
      <th scope="col">AltContact</th>
      <th scope="col">Email_id</th>
	  <th scope="col">AltEmail_id</th>
      <th scope="col">Name1</th>
      <th scope="col">Name2</th>
      <th scope="col">Name3</th>
      <th scope="col">MentorName</th>
      <th scope="col">Mentor_contact</th>
      <th scope="col">Mentor_email</th>
      <th scope="col" >Description</th>
      <th scope="col">Video_link</th>
	  <th scope="col">	Patent</th>
      <th scope="col">Patent_ApplicationNo</th>
      <th scope="col">GrantPatent	</th>
      <th scope="col">PatentCertificate</th>
      <th scope="col">AwardsDetail</th>
	<th scope="col">Billing_Pincode</th>
      <th scope="col">Billing_Address</th>
      <th scope="col">Billing_City</th>
      <th scope="col">Billing_State</th>
      
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
      <td scope="row"><?php echo $data->inn_id;?></td>
     <td scope="row"><?php echo $data->Category;?></td>
     <td scope="row"><?php echo $data->Title_Innovation;?></td>
     <td scope="row"><?php echo $data->Field;?></td>
     <td scope="row"><?php echo $data->TeamLeader;?></td>
     <td scope="row"><?php echo $data->Contact_no;?></td>
     <td scope="row"><?php echo $data->AltContact_no;?></td>
     <td scope="row"><?php echo $data->Email_id;?></td>
	<td scope="row"><?php echo $data->AltEmail_id;?></td>
     <td scope="row"><?php echo $data->Name1;?></td>
     <td scope="row"><?php echo $data->Name2;?></td>
     <td scope="row"><?php echo $data->Name3;?></td>
     <td scope="row"><?php echo $data->MentorName;?></td>
     <td scope="row"><?php echo $data->Mentor_contact;?></td>
     <td scope="row"><?php echo $data->Mentor_email;?></td>
     <td scope="row" ><div style="overflow: scroll; height:100px"><?php echo $data->Description;?></td>
     <td scope="row"><?php echo $data->Video_link;?></td>
     <td scope="row"><?php echo $data->Patent;?></td>
     <td scope="row"><?php echo $data->Patent_ApplicationNo;?></td>
     <td scope="row"><?php echo $data->GrantPatent;?></td>
     <td scope="row"><a href="<?php echo base_url; ?>uploadinnovation/<?php echo $data->inn_id;?>/<?php echo $data->PatentCertificate;?>" style="background-color: aliceblue" target="_blank"><?php echo $data->PatentCertificate;?></a></td>
     <td scope="row"><?php echo $data->AwardsDetail;?></td>
     <td scope="row"><?php echo $data->Billing_Pincode;?></td>
     <td scope="row"><?php echo $data->Billing_Address;?></td>
     <td scope="row"><?php echo $data->Billing_City;?></td>
     <td scope="row"><?php echo $data->Billing_State;?></td>
     
     <td scope="row"><?php echo $data->Payment_status;?></td>
     <td scope="row"><?php echo $data->Bank_ref_no;?></td>
     <td scope="row"><?php echo $data->Payment_datetime;?></td>
     <td scope="row"><?php echo $data->tracking_id;?></td>
     <td scope="row"><?php echo $data->order_detail;?></td>
    
      
    </tr>
    <?php } ?>
  </tbody>
</table>
    </main>
  </body>
</html>
