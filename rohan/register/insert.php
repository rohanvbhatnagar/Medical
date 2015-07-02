<!DOCTYPE html>
<html>
<body>
<?php
include 'connect.php';
?>
<?php

if(isset($_POST['submit']))
{

$sql = "INSERT INTO `registration`(`Email`, `Password`, `CPassword`, `Name_shop`, `Name_owner`, `DOB`, `Address`, `Country`, `State`, `City`, `Mobile_no`, `A_no`, `Zip_code`) 
VALUES ('$_POST[Email]','$_POST[Password]','$_POST[CPassword]','$_POST[Name_shop]','$_POST[Name_owner]','$_POST[DOB]','$_POST[Address]'
,'$_POST[Country]','$_POST[State]','$_POST[City]','$_POST[Mobile_no]','$_POST[A_no]','$_POST[Zip_code]')";


if(!mysqli_query($conn,$sql))
{
die('Error:' .mysql_error());
}

}




mysqli_close($conn);
?>
</body>
</html>