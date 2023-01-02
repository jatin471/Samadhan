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
$victim_name=$_POST['victim_name'];
$crime_type=$_POST['crime_type'];
$date=$_POST['date'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$aadhar_number=$_SESSION['aadhar_number'];
$name=$_SESSION['name'];
$insert="INSERT INTO `crime` (`AADHAR_NUMBER`, `NAME`, `VICTIM_NAME`, `DATE_OF_ISSUE`, `CRIME_TYPE`, `DATE_OF_CRIME`, `PINCODE`, `CITY`) VALUES ('$aadhar_number', '$name', '$victim_name', current_timestamp(), '$crime_type', '$date', '$pincode', '$city');"
;$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
if($results)
{
    echo '<script>alert("Query Successfully Registered !!!") </script>';
}
else 
{
    echo '<script>alert("Query Registration failed !!!  Please try again") </script>';
}


?>

</body>
</html>
 