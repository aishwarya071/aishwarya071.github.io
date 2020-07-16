<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
</head>
<body>
<div class="form">
<div>
<h1>Insert New Record</h1>
<form name="form" method="post"> 
<input type="text" name="name" placeholder="Enter Name">
<input type="number" name="rno" placeholder="Enter Roll NO.">
<input name="submit" type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $stname =$_POST['name'];
    $rno = $_POST['rno'];
$servername = "localhost";
$username = "root";
$password = "AJ@mysqldata";


}

$connection_mysql = mysqli_connect("localhost","root","AJ@mysqldata","myDB");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   mysqli_select_db($connection_mysql,"test");
   
$sql = "CREATE TABLE deets (
  stname VARCHAR(30) NOT NULL,
  rno INT(6)
  )";
  
  if ($connection_mysql->query($sql) === TRUE) {
    echo "Table deets created successfully";
  } else {
    echo "Error creating table: " . $connection_mysql->error;
  }
 
  $sql = "INSERT INTO deets (stname, rno)
  VALUES ('$stname', '$rno')";
  
  if ($connection_mysql->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection_mysql->error;
  }
  
  echo "<b> <center>Database Output</center> </b> <br> <br>";
 
  $sql = "SELECT stname, rno FROM deets";
  $result = $connection_mysql->query($sql);
  
  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "Student name: " . $row["stname"]. "   - Roll no.: " . $row["rno"]. "<br>";
      }
    }
  mysqli_close($connection_mysql);


?>
