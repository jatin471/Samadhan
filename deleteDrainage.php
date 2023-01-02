<?php
    include('conf.php');
    if(isset($_GET['AADHAR_NUMBER'])){
        $AADHAR_NUMBER=$_GET['AADHAR_NUMBER'];
        $sql="DELETE FROM `drainage` WHERE AADHAR_NUMBER='$AADHAR_NUMBER'";
        $delete=mysqli_query($conn,$sql);
    }
    header("location:masterSamadhan.php")
?>
