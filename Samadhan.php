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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
    <title>SAMADHAN</title>
    <style>
         .con {
            display: flex;
        }

        .box1 {
            flex: 50%;
            padding: 50px;
        }
    </style>

</head>



<body vlink="blue">


    <!-- Navbar -->

    <div id="one">
        <nav class="navbar glass">
 
            <h1 class="logo">Samadhan</h1>
            <ul class="nav-links">
                <li class="active cir_border"><a href="#second">Home</a></li>
                <li class="cir_border"><a href="#third">About Us</a></li>
                <li class="cir_border"><a href="#fourth">Services</a></li>
                
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo '
                    <li class="cir_border"><a href="userIssue.php">Your Queries</a></li>
                    <li class="cir_border"><a href="#">Welcome ' . $_SESSION['name'] . ' </li>
                    <li class="cir_border"><a href="logout.php" class="cir_border" >Logout</a></li>';
                } else {
                    echo'<li class="cir_border"><a href="#sixth">Contact</a></li>';
                    echo '<li class="cir_border"><a href="loginPage.html">Login/Register</a></li>';
                }
                ?>
            </ul>
        </nav>

    </div>




    <!-- </header> -->

    <div id="second">
        <!-- <header id="home"> -->
        <div class="header-content">
            <!-- <div class="line"></div> -->
            <marquee>
            <h1 style="color: orange;"><u></u>ALL YOUR PROBLEMS :1 SOLUTION<b></b> </h1>
            </marquee>
            <div class="secondp">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" ></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="damagedRoadRepair.jpeg" height="500" width="500" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="wasteCollection.webp" height="500" width="500" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="electricity.jpg" height="500" width="500" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="drainageCleaning.jpg" height="500" width="500" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="healthcare.jpg" height="500" width="500" alt="Sixth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="foodSecurity.png" height="500" width="500" alt="Seventh slide">
                        </div>
                        
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="samadhan_in_hindi.jpg" height="500" width="500" alt="First slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <a href="#" class="ctn">Learn more</a> -->
        </div>
        <!-- </header> -->
    </div>




    <div id="third">
        <h1 align="center"><b><u style="color: orange;">ABOUT US</u></b></h1><br><br><br>

        * Samadhan is the place where all your problems are solved .<br><br>


        * This is the place where you can register the issues you are facing and we will solve that issue .<br><br>


        * It's totally free of cost.<br><br>


        * Our aim is to make our people free from all the issues they are facing.<br><br>


        * This will make our society a best place to live in .<br><br>


        * We want that people in this digital age rather than going to a physical center should be able to solve their problems digitally.<br><br>

        * Our aim is to make problem mukt bharat.
    </div>

    <br><br><br>

    <div id="fourth">
        <h1 align="center" style="color: orange;"><u><b>GET HELPED IN 2 STEPS/HOW TO REGISTER</b></u></h1>

        <br><br><br>




        <?php

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<div>
        <h1 align="center" style="color: rgb(251, 242, 0);">Register your issue</h1><br><br>
        <!-- <div class="numbertext">3 / 3</div> -->
        <a href="Query_page.html">
            <img src="resolve_issue_image.jpg" width="100%" height="500">
        </a>
        </div>';
        } else {
            echo '<div class="con">
            <div class="box1">
                <div>
                    <h1 align="center" style="color: rgb(251, 242, 0);">Register yourself</h1><br><br>
                    <!-- <div class="numbertext">1 / 3</div> -->
                    <a href="SamadhanRegistration.html">
                        <img src="RegisterHere_image.png" width="100%" height="500">
                    </a>
                </div>
            </div>
    
            <div class="box1">
                <div>
                    <h1 align="center" style="color: rgb(251, 242, 0);">Login Here</h1><br><br>
                    <!-- <div class="numbertext">2 / 3</div> -->
                    <a href="loginPage.html">
                        <img src="userLogin.jpg" width="100%" height="480">
                    </a>
                </div>
            </div>
        </div> ';
        }
        ?>

    </div>


    </div>

    <br><br><br><br><br><br>

    <div id="sixth">

     <h1 align="center"><b><u style="color: orange;">CONTACT US</u></b></h1>
        <br><br><br>
        <div class="container">
            <div class="box">
                <table class="t1">
                    <tr>
                        <td>
                            <h2 style="color: tomato; color: color-mix();">&nbsp; &nbsp; Physical Centers</h2>
                            <ol style="color: fuchsia;">
                                <li>Mumbai</li><br>
                                <li>Delhi</li><br>
                                <li>Chennai</li><br>
                                <li>Kolkata</li><br>
                                <li>Jabalpur</li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="box">
                <table class="t1">
                    <tr>
                        <td>
                            <h2 style="color: tomato; color: color-mix();">&nbsp; &nbsp; FAQs</h2>
                            <ul>
                                <li><a href="FAQs.html">FAQs</a></li><br>
                                <!-- <li>How to get helped</li><br> -->

                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="box">
                <table class="t1">
                    <tr>
                        <td>
                            <h2 style="color: tomato; color: color-mix();">&nbsp; &nbsp; Contact Number</h2>
                            <ol style="color: fuchsia;">
                                <li>Helpline Number<br>123456789</li><br>
                                <li>Telephone Number<br> 0202020202</li>

                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
     
       
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
