<html>
    <body>
<?php 
$a=$_POST['up'];
$b=$_POST['code1'];
        $mysqlport=getenv('S2G_MYSQL_PORT');
        $dbhost="localhost:" .$mysqlport;
        $dbuser='root';
        $dbpass='';
        $connect=mysql_connect($dbhost,$dbuser,$dbpass);
        mysql_select_db('enquiry');
        $query1="UPDATE enquiry SET stages='$a' WHERE code='$b'";
        if(mysql_query($query1))
        {
        echo "<script>
        alert('Update successfull');
        window.close();
        window.open('1.html');
        </script>";
    }
        else
        {
            echo "<script>
        alert('update failed');
        window.close();
        window.open('1.html');
        </script>";
    }
        mysql_close($connect);
?>
</body>
</html>
        