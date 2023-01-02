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
$conn=mysqli_connect('localhost','root','','samadhan') or die ('unable to connect to database');
$myName=$_POST['myName'];
$myphonenum=$_POST['myphonenum'];
$myEmail=$_POST['myEmail'];
$mybirthdate=$_POST['mybirthdate'];
$myaadharnum=$_POST['myaadharnum'];
$myGender=$_POST['myGender'];
$mystate=$_POST['mystate'];
$mydistrict=$_POST['mydistrict'];
$mycity=$_POST['mycity'];
$mypincodenum=$_POST['mypincodenum'];
$myaddress=$_POST['myaddress'];
$pswd=$_POST['pswd'];
$hash=password_hash($pswd,PASSWORD_DEFAULT);
echo $hash;


echo $myaadharnum."   ".$myphonenum."   ".$myEmail."  ".$mybirthdate." hello ".$myaadharnum."  ".$myGender."  ".$mystate."  ".$mydistrict."  ".$mycity."  ".$mypincodenum."  ".$myaddress."  ".$pswd;

$insert="INSERT INTO `customer_login`(`name`, `phone_number`, `email`, `date_of_birth`, `aadhar_number`, `gender`, `state`, `district`, `city`, `pincode`, `address`, `password`) 
         VALUES ('$myName','$myphonenum','$myEmail','$mybirthdate','$myaadharnum','$myGender','$mystate','$mydistrict','$mycity','$mypincodenum','$myaddress','$pswd')";

$results = mysqli_query($conn,$insert);
if($results)
{
    echo '<script>alert("Registered Successfully  !!!") </script>';
}
else 
{
    echo '<script>alert("Regitration failed !!! Please try again") </script>';
    // header('location:SamadhanRegistration.html');
}


 

?>

</body>
</html>
 