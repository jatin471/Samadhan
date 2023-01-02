<?php
    include('conf.php');
    if(isset($_GET['AADHAR_NUMBER'])){
        // echo "HEllo";
        $AADHAR_NUMBER=$_GET['AADHAR_NUMBER'];
        $sql="DELETE FROM `road_damage` WHERE AADHAR_NUMBER='$AADHAR_NUMBER'";
        $delete=mysqli_query($conn,$sql);
    }

    header("location:masterSamadhan.php")
    ?>
