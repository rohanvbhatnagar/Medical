<?php
$servername="localhost";
$username="root";
$password="";

//Create Connection
$conn = mysqli_connect($servername,$username,$password);

//Check connection
if($conn->connect_error){
die("Connection failed: " .$conn->connect_error);
}

$dbname="rbb";
$selected = mysqli_select_db($conn,$dbname); 
  if($selected == $dbname)
{

}
else
{
  die("Could not select rbb");
  }
?>