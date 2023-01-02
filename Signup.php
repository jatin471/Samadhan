<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Document</title>
</head>

<body>
    <?php


    include('conf.php');
    $name = $_POST['myName'];
    $phone_number = $_POST['myphonenum'];
    $email=$_POST['myEmail'];
    $date_of_birth=$_POST['mybirthdate'];
    $aadhar_number=$_POST['myaadharnum'];
    $gender=$_POST['myGender'];
    $state=$_POST['mystate'];
    $district=$_POST['mydistrict'];
    $city=$_POST['mycity'];
    $pincode=$_POST['mypincodenum'];
    $address=$_POST['myaddress'];
    $password=$_POST['password'];



    $sql = "INSERT INTO `customer_login` (`name`, `phone_number`, `email`, `date_of_birth`, `aadhar_number`, `gender`, `state`, `district`, `city`, `pincode`, `address`, `password`) VALUES ('$name', '$phone_number', '$email', '$date_of_birth', '$aadhar_number', '$gender', '$state ', '$district ', '$city', '$pincode', '$address', '$password'); ";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "Successful insertion";
    }
    else{
        echo "Unsuccessful insertion";
    }

    // if ($result = mysqli_fetch_assoc($res)) {
    //     $_SESSION['myaadharnum'] = $result['myaadharnum'];
    //     header('location:Samadhan.html');
    // } else {
    //     header('location:loginPage.html');
    // }
    // ?>
</body>

</html>