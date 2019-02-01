<html>
<head>
	<title>Display</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="button.css">
</head>
<body>
		
						

<?php 
        $mysqlport=getenv('S2G_MYSQL_PORT');
        $dbhost="localhost:" .$mysqlport;
        $dbuser='root';
        $dbpass='';
        $connect=mysql_connect($dbhost,$dbuser,$dbpass);
        mysql_select_db('enquiry');

        
        $query2 = "SELECT * FROM enquiry"; 
        $result2 = mysql_query($query2);
        ?>
        
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				
        <table class="container"><?php
        echo "<thead>";
        echo "<th>Enquiry No.</th><th>Project Code</th><th>Project Representative</th><th>Description</th><th>Project Type</th><th>Budget</th><th>Stages</th><th>Remarks</th><th>Time of Requirement</th><th>Project Value in INR</th><th>Target Date</th> <th>Name</th><th>Company Name</th><th>Company Address</th><th>designation</th><th>Landline</th><th>Mobile</th><th>Email</th><th>Website</th>"; 
        echo "</thead>";
        while($row = mysql_fetch_array($result2))
        { 
        echo "<tr class='table100-head'><td>".$row['enquiry_no']."</td><td>".$row['code']."</td><td>".$row['project_rep']."</td><td>".$row['description']."</td><td>".$row['type']."</td><td>".$row['budget']."</td><td>".$row['stages']."</td><td>".$row['remarks']."</td><td>".$row['time']."</td><td>".$row['value']."</td><td>".$row['date']."</td><td>". $row['name']."</td><td>".$row['company_name']."</td><td>".$row['company_address']."</td><td>".$row['designation']."</td><td>".$row['landline']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td>".$row['website']."</td></tr>"; 

        }

echo "</table>";
?>
  <center>
<a href="1.html"><input type="button" value="back" class="button button2"></a></center>
</div></div></div>
      


        </body>
        </html>