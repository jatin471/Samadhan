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
                        <li class="active cir_border"><a href="#">Verify Admin</a></li>
                          <li class="cir_border"><a href="#">Welcome  </li>
                          <li class="cir_border"><a href="logout.php" class="cir_border" >Logout</a></li>';
                } else {
                    echo '<li class="cir_border"><a href="loginPage.html">Login/Register</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>           

    <!-- Verify bar -->

    <?php
    include('conf.php');
    

    $sql = "SELECT * FROM `electricity`";
    $res = mysqli_query($conn, $sql); 
    echo "<h1><u><b>Electricity</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>HOUSE_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        <th>VERIFY</th>
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
                <td > <a href="deleteElectricity.php?HOUSE_NAME=' .$result['HOUSE_NAME']. '">Verify</a> </td>
                </tr>';
    }
    echo "</table>";
    ?>




<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `road_damage`";
    $res = mysqli_query($conn, $sql); 
    echo "<h1><u><b>Road Damaged</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>ROAD_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        <th>VERIFY</th>
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
            <td > <a href='deleteRoadDamaged.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
            </tr>";
    }
    echo "</table>";
    ?>

  



<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `waste_collection`";
    $res = mysqli_query($conn, $sql); 
    echo "<h1><u><b>Waste Collection</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>AREA_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        <th>VERIFY</th>
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
              <td > <a href='deleteWasteCollection.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
              </tr>";
    }
    echo "</table>";
    ?>





<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `water_supply`";
    $res = mysqli_query($conn, $sql); 
    echo "<h1><u><b>Water Supply</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>STREET_NAME</th>
        <th>PINCODE</th>
        <th>CITY</th>
        <th>VERIFY</th>
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
        <td > <a href='deleteWaterSupply.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
        </tr>";
    }
    echo "</table>";
    ?>





<!-- 
<?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `drainage`";
//     $res = mysqli_query($conn, $sql); 
//     echo "<h1><u><b>Drainage</b></u></h1>";
//     echo '<table >
//     <tr>
//         <th>AADHAR_NUMBER </th>
//         <th>NAME</th>
//         <th>DATE_OF_ISSUE</th>
//         <th>ROAD_NAME</th>
//         <th>PINCODE</th>
//         <th>CITY</th>
//         <th>VERIFY</th>
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
//         <td > <a href='deleteDrainage.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
//         </tr>";
//     }
//     echo "</table>";
    ?> -->






<!-- 
<?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `food`";
//     $res = mysqli_query($conn, $sql); 
//     echo "<h1><u><b>Food Security</b></u></h1>";
//     echo '<table >
//     <tr>
//         <th>AADHAR_NUMBER </th>
//         <th>NAME</th>
//         <th>DATE_OF_ISSUE</th>
//         <th>SHOP_NAME</th>
//         <th>PINCODE</th>
//         <th>CITY</th>
//         <th>VERIFY</th>
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
//         <td > <a href='deleteFoodSecurity.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
//         </tr>";
//     }
//     echo "</table>";
    ?> -->





<!-- 
<?php

// echo "<br><br><br>";
//     include('conf.php');
    
//     $sql = "SELECT * FROM `health`";
//     $res = mysqli_query($conn, $sql); 
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
//         <th>VERIFY</th>
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
//         <td > <a href='deleteHealthcare.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
//         </tr>";
//     }
//     echo "</table>";
    ?> -->





<?php

    echo "<br><br><br>";
    include('conf.php');
    
    
    $sql = "SELECT * FROM  `crime`";
    $res = mysqli_query($conn, $sql); 
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
        <th>VERIFY</th>
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
        <td > <a href='deleteCrime.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
        </tr>";
    }
    echo "</table>";
    ?>







<?php

echo "<br><br><br>";
    include('conf.php');
    
    $sql = "SELECT * FROM `other_issues`";
    $res = mysqli_query($conn, $sql); 
    echo "<h1><u><b>Other Issues</b></u></h1>";
    echo '<table >
    <tr>
        <th>AADHAR_NUMBER </th>
        <th>NAME</th>
        <th>DATE_OF_ISSUE</th>
        <th>ISSUE_TYPE</th>
        <th>PINCODE</th>
        <th>CITY</th>
        <th>VERIFY</th>
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
        <td > <a href='deleteOther.php?AADHAR_NUMBER=" .$result['AADHAR_NUMBER']. "'>Verify</a> </td>
        </tr>";
    }
    echo "</table>";
    ?>




</body>

</html>