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
    $aadhar_num = $_POST['aadhar_number'];
    $pass = $_POST['password'];
    $sql = "select aadhar_number,password,name
            from customer_login 
            where aadhar_number='$aadhar_num' and password='$pass' ";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "YES<br>";
    }
    else{
        echo "NO<br>";
    }

    if ($result = mysqli_fetch_assoc($res)) {
        
        session_start();

        $_SESSION['loggedin'] = true;
        $_SESSION['aadhar_number'] = $aadhar_num;
        $_SESSION['name']=$result['name'];
        header('location:Samadhan.php');
    } else {
        echo "Not Hello";
        header('location:loginPage.html');
    }
    ?>
</body>

</html>
