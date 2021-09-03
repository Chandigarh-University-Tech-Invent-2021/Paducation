<?php session_start();
    //connecting to database
    $connection = mysqli_connect("localhost:5500","root","");
    $db = mysqli_select_db($connection,"details");  
    //create query
    $query = "insert into entry values  ('$_POST[first_name]','$_POST[last_name]', 
    '$_POST[email]','$_POST[city]',
    $_POST[quantity])";
    //execute query
    // echo $query;
    $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
    
?>
<script type="text/javascript">
    alert("Student added Successfully");
    window.location.href="admin_login.php";//redirecting to admin_dashboard.php
</script> 