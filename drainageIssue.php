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
$road_name=$_POST['road_name'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$aadhar_number=$_SESSION['aadhar_number'];
$name=$_SESSION['name'];
$insert="INSERT INTO drainage(AADHAR_NUMBER,NAME,ROAD_NAME,PINCODE,CITY) VALUES('$aadhar_number','$name','$road_name','$pincode','$city')";
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
 