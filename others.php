<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="0; /Samadhan/Samadhan.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$conn=mysqli_connect('localhost','root','','samadhan') or die ('unable to connect to database');
$issue_type=$_POST['issue_type'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$aadhar_number=$_SESSION['aadhar_number'];
$name=$_SESSION['name'];
$insert="INSERT INTO `other_issues` (`AADHAR_NUMBER`, `NAME`, `DATE_OF_ISSUE`, `ISSUE_TYPE`, `PINCODE`, `CITY`) VALUES ('$aadhar_number', '$name', current_timestamp(), '$issue_type', '$pincode', '$city');";
$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
if($results)
{
    echo '<script>alert("Query Successfully Registered !!!") </script>';
}
else 
{
    echo '<script>alert("Query Registration failed !!!") </script>';
}


?>

</body>
</html>
 