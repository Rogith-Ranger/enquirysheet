<html>
    <head>
        <title>Saving..</title>
        <link rel="stylesheet" href="button.css">
</head>
<body>
<?php
    $mysqlport=getenv('S2G_MYSQL_POST');
    $dbhost="localhost:".$mysqlport;
    $dbuser='root';
    $dbpass='';
    $connect=mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db('enquiry');
    if(isset($_POST['name']))
    {
    $n=$_POST['name'];
    }
    if(isset($_POST['cname']))
    {
    $cn=$_POST['cname'];
    }
    if(isset($_POST['cadd']))
    {
    $ca=$_POST['cadd'];
    }
    if(isset($_POST['desg']))
    {
    $d=$_POST['desg'];
    }
    if(isset($_POST['cland']))
    {
    $cl=$_POST['cland'];
    }
    if(isset($_POST['cmob']))
    {
    $cm=$_POST['cmob'];
    }
    if(isset($_POST['email']))
    {
    $e=$_POST['email'];
    }

    if(isset($_POST['site']))
    {
    $s=$_POST['site'];
    }



    if(isset($_POST['enqn']))
    {
    $enq=$_POST['enqn'];
    }
    if(isset($_POST['code']))
    {
    $c=$_POST['code'];
    }
    if(isset($_POST['prorep']))
    {
    $pr=$_POST['prorep'];
    }
    if(isset($_POST['descrip']))
    {
    $d=$_POST['descrip'];
    }
    if(isset($_POST['type']))
    {
    $t=$_POST['type'];
    }
    if(isset($_POST['bud']))
    {
    $bud=$_POST['bud'];
    }
    if(isset($_POST['stage']))
    {
    $stg=$_POST['stage'];
    }

    if(isset($_POST['rem']))
    {
    $r=$_POST['rem'];
    }
    if(isset($_POST['time']))
    {
    $time=$_POST['time'];
    }
    if(isset($_POST['value']))
    {
    $val=$_POST['value'];
    }
    if(isset($_POST['date']))
    {
    $dt=$_POST['date'];
    }
    
    
    $query_enq="insert into enquiry(enquiry_no,code,project_rep,description,type,budget,stages,remarks,time,value,date,name,company_name,company_address,designation,landline,mobile,email,website) 
    values('$enq','$c','$pr','$d','$t','$bud','$stg','$r','$time','$val','$dt','$n','$cn','$ca','$d','$cl','$cm','$e','$s')";
    
    

    if(mysql_query($query_enq,$connect))
    
         echo "Sumitted Successfully";
    
         else
         {
          echo "Submit Failed.<h3>Some fields are simmilar to previous data,Kindly enter the correct details.";
         }
mysql_close($connect);
?>
<h1>Thank you</h1>
<a href="1.html"><input type="button" value="back" class="button button2"></a>
</body>
</html>
