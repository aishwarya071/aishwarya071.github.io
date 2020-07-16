
<?php

error_reporting(0);
if(isset($_POST['submit'])){ 
    $Id = $_POST['Id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
}

$servername = "localhost";
$username = "root";
$password = "AJ@mysqldata";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
  else
{
  echo "Connected successfully";
}
$sql = "CREATE TABLE Mydetailpro (
    id INT(6),
    proname VARCHAR(30) NOT NULL,
    price INT(20) NOT NULL,
    descr VARCHAR(50)
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
$sql = "INSERT INTO Mydetailpro (id, proname, price, descr)
VALUES ('$Id', '$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<b> <center>Database Output</center> </b> <br> <br>";
 
$sql = "SELECT id, proname, price, descr FROM Mydetailpro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "   - Name: " . $row["proname"]. "   -Price" . $row["price"]. "   -Description " .$row["descr"]. "<br>";
    }
}



$conn->close();


?>
