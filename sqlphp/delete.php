<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete A Record</title>
</head>
<body>
<div class="form">
<div>
<h1>Delete A Record</h1>
<form name="form" method="post"> 
<input type="text" name="name" placeholder="Enter Name to be deleted">
<input name="submit" type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $stname =$_POST['name'];
$servername = "localhost";
$username = "root";
$password = "AJ@mysqldata";


}

$connection_mysql = mysqli_connect("localhost","root","AJ@mysqldata","myDB");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   mysqli_select_db($connection_mysql,"test");
   $del = mysqli_query($connection_mysql,"delete from deets where stname = '$stname'"); 

if($del)
{
    echo "Record deleted successfully";
    mysqli_close($connection_mysql);
    
    exit;	
}
else
{
    echo "Error deleting record"; 
}

mysqli_close($connection_mysql);


?>
