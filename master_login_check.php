<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include('conf.php');
    $aadhar_num = $_POST['myaadharnum'];
    $pass = $_POST['password'];
    $sql = "select *
            from master_login 
            where aadhar_number='$aadhar_num' and password='$pass' ";
    $res = mysqli_query($conn, $sql);
    // if($res){
    //     echo "YES";
    // }
    // else{
    //     echo "NO";
    // }

    if ($result = mysqli_fetch_assoc($res)) {
        session_start();
        // echo "HEllo";
        $_SESSION['loggedin'] = true;
        // echo $result['aadhar_number'].$result['password'];
        // $_SESSION['name']=$result['name'];
        $_SESSION['myaadharnum'] = $result['myaadharnum'];
        header('location:masterSamadhan.php');
    } else {
        // echo "NOT hello";
        header('location:master_loginPage.html');
    }
    ?>
</body>

</html>