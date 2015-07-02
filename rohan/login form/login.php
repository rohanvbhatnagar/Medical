<?php
session_start(); // Starting Session
include('connect.php');
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['Email']) || empty($_POST['Password'])) {
$error = "Email or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['Email'];
$password=$_POST['Password'];
// To protect MySQL injection for Security purpose
//Un-quotes a quoted string
$email = stripslashes($email);
$password = stripslashes($password);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"select Email,Password from registration where `Password`='$password' AND `Email`='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {

$_SESSION['login_user']=$email; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>