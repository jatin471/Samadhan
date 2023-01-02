<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passions+Conflict&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <title>SAMADHAN</title>
    <style>

        body{
            text-align: center;
        }
        h1{
            color:rgb(43, 110, 246)
        }
        table {

            border: 3px solid black;
            border-collapse: collapse;
            width: 75%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 15px;
        }
        table th{
            border: 3px solid black;
            color: deeppink;
            font-size: xx-large;
            padding: 15px;
        }

        table td{
            border: 3px solid black;
            font-size:larger;
            padding: 15px;
        }
        .btn{
            background-color: black;
            color: darkred;
            font-size: 1.3em;
            padding: 5px 30px;
            text-decoration: none;
        }
        .btn:hover{
            background-color: darkred;
            color: black;
        }
    </style>
</head>



<body vlink="blue">


    <!-- Navbar -->

    <div id="one">
        <nav class="navbar glass">
            <h1 class="logo">Samadhan</h1>
            <ul class="nav-links">
                
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo '
                    <li class="active cir_border"><a href="Samadhan.php">Home</a></li>
                    <li class="cir_border"><a href="logout.php" class="cir_border" >Logout</a></li>';
                } 
                ?>
            </ul>
        </nav>
    </div>           

    <!-- Verify bar -->

    <?php
    include('conf.php');
    
    
    $aadhar_num=$_SESSION['aadhar_number'];
    $sql = "SELECT * FROM `electricity` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Electricity</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>HOUSE_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo '<tr>
                <td>'.$result["AADHAR_NUMBER"].'</td>
                <td>'.$result["NAME"].'</td>
                <td>'.$result["DATE_OF_ISSUE"].'</td>
                <td>'.$result["HOUSE_NAME"].'</td>
                <td>'.$result["PINCODE"].'</td>
                <td>'.$result["CITY"].'</td>
                </tr>';
    }
    echo "</table>";
}
    ?>




<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `road_damage` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Road Damaged</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>ROAD_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo "<tr>
            <td>".$result['AADHAR_NUMBER']."</td>
            <td>".$result['name']."</td>
            <td>".$result['DATE_OF_ISSUE']."</td>
            <td>".$result['ROAD_NAME']."</td>
            <td>".$result['PINCODE']."</td>
            <td>".$result['CITY']."</td>
            </tr>";
    }
    echo "</table>";
}
    ?>

  



<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `waste_collection` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Waste Collection</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>AREA_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo "<tr>
              <td>".$result['AADHAR_NUMBER']."</td>
              <td>".$result['NAME']."</td>
              <td>".$result['DATE_OF_ISSUE']."</td>
              <td>".$result['AREA_NAME']."</td>
              <td>".$result['PINCODE']."</td>
              <td>".$result['CITY']."</td>
               </tr>";
    }
    echo "</table>";
}
    ?>





<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `water_supply` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Water Supply</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>STREET_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo "<tr>
        <td>".$result['AADHAR_NUMBER']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['DATE_OF_ISSUE']."</td>
        <td>".$result['STREET_NAME']."</td>
        <td>".$result['PINCODE']."</td>
        <td>".$result['CITY']."</td>
        </tr>";
    }
    echo "</table>";
}
    ?>






<!-- <?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `drainage` WHERE `AADHAR_NUMBER`='$aadhar_num'";
//     $res = mysqli_query($conn, $sql); 
//     $num=mysqli_num_rows($res);
//     if($num){
//     echo "<h1><u><b>Drainage</b></u></h1>";
//     echo '<table >
//     <tr>
//         <th>AADHAR_NUMBER </th>
//         <th>NAME</th>
//         <th>DATE_OF_ISSUE</th>
//         <th>ROAD_NAME</th>
//         <th>PINCODE</th>
//         <th>CITY</th>
        
//     </tr>'
//     ;

//     while($result=mysqli_fetch_assoc($res))
//     {
//         echo "<tr>
//         <td>".$result['AADHAR_NUMBER']."</td>
//         <td>".$result['NAME']."</td>
//         <td>".$result['DATE_OF_ISSUE']."</td>
//         <td>".$result['ROAD_NAME']."</td>
//         <td>".$result['PINCODE']."</td>
//         <td>".$result['CITY']."</td>
//         </tr>";
//     }
//     echo "</table>";
// }
    ?> -->







<!-- <?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `food` WHERE `AADHAR_NUMBER`='$aadhar_num'";
//     $res = mysqli_query($conn, $sql); 
//     $num=mysqli_num_rows($res);
//     if($num){
//     echo "<h1><u><b>Food Security</b></u></h1>";
//     echo '<table >
//     <tr>
//         <th>AADHAR_NUMBER </th>
//         <th>NAME</th>
//         <th>DATE_OF_ISSUE</th>
//         <th>SHOP_NAME</th>
//         <th>PINCODE</th>
//         <th>CITY</th>
//     </tr>'
//     ;

//     while($result=mysqli_fetch_assoc($res))
//     {
//         echo "<tr>
//         <td>".$result['AADHAR_NUMBER']."</td>
//         <td>".$result['NAME']."</td>
//         <td>".$result['DATE_OF_ISSUE']."</td>
//         <td>".$result['SHOP_NAME']."</td>
//         <td>".$result['PINCODE']."</td>
//         <td>".$result['CITY']."</td>
//         </tr>";
//     }
//     echo "</table>";
// }
    ?> -->






<!-- <?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `health` WHERE `AADHAR_NUMBER`='$aadhar_num'";
//     $res = mysqli_query($conn, $sql); 
//     $num=mysqli_num_rows($res);
//     if($num){
//     echo "<h1><u><b>Healthcare</b></u></h1>";
//     echo '<table >
//     <tr>
//         <th>AADHAR_NUMBER </th>
//         <th>NAME</th>
//         <th>DATE_OF_ISSUE</th>
//         <th>HOSPITAL_NAME</th>
//         <th>HOSPITAL_ID</th>
//         <th>PINCODE</th>
//         <th>CITY</th>
     
//     </tr>'
//     ;

//     while($result=mysqli_fetch_assoc($res))
//     {
//         echo "<tr>
//         <td>".$result['AADHAR_NUMBER']."</td>
//         <td>".$result['NAME']."</td>
//         <td>".$result['DATE_OF_ISSUE']."</td>
//         <td>".$result['HOSPITAL_NAME']."</td>
//         <td>".$result['AADHAR_NUMBER']."</td>
//         <td>".$result['PINCODE']."</td>
//         <td>".$result['CITY']."</td>
//        </tr>";
//     }
//     echo "</table>";
// }
    ?> -->





<?php

    echo "<br><br><br>";
    include('conf.php');
    
    
    $sql = "SELECT * FROM  `crime` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Crime</b></u></h1>";
    echo '<table>
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>VICTIM_NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>CRIME_TYPE</th>
        <th>DATE_OF_CRIME</th>
        <th>PINCODE</th>
        <th>CITY</th>
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo "<tr>
        <td>".$result['AADHAR_NUMBER']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VICTIM_NAME']."</td>
        <td>".$result['DATE_OF_ISSUE']."</td>
        <td>".$result['CRIME_TYPE']."</td>
        <td>".$result['DATE_OF_CRIME']."</td>
        <td>".$result['PINCODE']."</td>
        <td>".$result['CITY']."</td>
        </tr>";
    }
    echo "</table>";
}
    ?>







<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `other_issues` WHERE `AADHAR_NUMBER`='$aadhar_num'";
    $res = mysqli_query($conn, $sql); 
    $num=mysqli_num_rows($res);
    if($num){
    echo "<h1><u><b>Other Issues</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>ISSUE_TYPE</th>
        <th>PINCODE</th>
        <th>CITY</th>
    </tr>'
    ;

    while($result=mysqli_fetch_assoc($res))
    {
        echo "<tr>
        <td>".$result['AADHAR_NUMBER']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['DATE_OF_ISSUE']."</td>
        <td>".$result['ISSUE_TYPE']."</td>
        <td>".$result['PINCODE']."</td>
        <td>".$result['CITY']."</td>
        </tr>";
    }
    echo "</table>";
}
    ?>




</body>

</html>