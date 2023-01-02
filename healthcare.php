<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="0; /Samadhan/Samadhan.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$conn=mysqli_connect('localhost','root','','samadhan') or die ('unable to connect to database');
$hospital_name=$_POST['hospital_name'];
$hospital_id=$_POST['hospital_id'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$aadhar_number=$_SESSION['aadhar_number'];
$name=$_SESSION['name'];
$insert="INSERT INTO `health` (`AADHAR_NUMBER`, `NAME`, `DATE_OF_ISSUE`, `HOSPITAL_NAME`, `H_ID`, `PINCODE`, `CITY`) VALUES ('$aadhar_number', '$name', current_timestamp(), '$hospital_name', '$hospital_id', '$pincode', '$city')";
;$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
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
 