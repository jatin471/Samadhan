<?php
    include('conf.php');
    if(isset($_GET['HOUSE_NAME'])){
        $HOUSE_NAME=$_GET['HOUSE_NAME'];
        $sql="DELETE FROM `electricity` WHERE HOUSE_NAME='$HOUSE_NAME'";
        $delete=mysqli_query($conn,$sql);
    }

    header("location:masterSamadhan.php")
    ?>
