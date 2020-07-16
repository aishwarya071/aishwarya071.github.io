<!DOCTYPE html>
<html>
	<head>
	<title>Prime Numbers</title>
    </head>
	<style>
	body {
	 font-family:arial;
	 font-size :20px;
	 background-color:coral;	
}
input[type=submit]
	{
font-size: 20px; 
font-weight: bold;
font-family: arial; 
background-color: yellow;
	}
h3{
    text-align:center;
}
	</style>
<body>
 <?php
 error_reporting(0);		
 $a=$_POST['lower'];
 $b=$_POST['upper'];	
 
 ?>		
			
<h3> Prime Numbers</h3>
<form method="post" action="firstphp.php" name="prime_me">
FIRST NUMBER  <input type="text" name="lower" 
	  value="<?php echo $a; ?>" autofocus>
  <br><br>   	 	 
SECOND NUMBER   <input type="text" name="upper" 
	  value="<?php echo $b; ?>">
<br><br>
<input type="submit" name="check" value="SUBMIT">
     	 	 	

</form>
	
<?php
if(isset($_POST['check']))
{
$a=$_POST['lower'];
$b=$_POST['upper'];
$flag=0;
for($a;$a<$b;$a++)
{
for($j=2;$j<$a;$j++)
{
if($a%$j==0)
{
$flag=1;
}
}
if($flag==0)
{
echo " ".$a." ";
}
$flag=0;
}
}
?>
