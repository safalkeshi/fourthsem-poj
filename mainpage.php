<?php
include '../includes/connect.db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FourthSem</title>
    <link rel="stylesheet" href="../css/include.css">
    <!-- fontawsome -->
    <script
        src="https://kit.fontawesome.com/9781621ba0.js"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- top nav begins -->
    <nav class="topnav">
        <a href="#">Blossom</a>
        <a href="#roomsection">ROOM</a>
        <a href="#kitchensection">Kitchen</a>
        <a href="#banquetsection">Banquet</a>
        <a href="#laundrysection">Laundry</a>
        <a href="userloginform.html"><i class="fa-solid fa-user"></i></a>
        <button><i class="fa-regular fa-sun"></i></button>
        <button><i class="fa-solid fa-moon"></i></button>
    </nav>


    <!-- roomsection begins -->
    <div id="roomsection">
        <center>
            <h1>Available room</h1>
        </center>
        <center id="rooms">
            <div class="container">
                <div class="card">
                    <div class="section">
                        <img src="../images/deluxebed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>Master Bedroom</p>
                            <p>A luxurious experience</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
                <div class="card">
                    <div class="section">
                        <img src="../images/doublebed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>Double Bedroom</p>
                            <p>A comfortable stay</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
                <div class="card">
                    <div class="section">
                        <img src="../images/kingbed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>King Bedroom</p>
                            <p>A royal stay awaits</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class="container">
                <div class="card">
                    <div class="section">
                        <img src="../images/masterbed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>Single Bedroom</p>
                            <p>Simple & cozy</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
                <div class="card">
                    <div class="section">
                        <img src="../images/queenbed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>Queen Bedroom</p>
                            <p>Fit for a queen</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
                <div class="card">
                    <div class="section">
                        <img src="../images/singlebed.jpg" alt="" />
                    </div>
                    <div class="section">
                        <center>
                            <p>Double Bedroom</p>
                            <p>Double the comfort</p>
                            <button class="logdata">Book Now</button>
                        </center>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <!-- Kitchen section -->
    <div id="kitchensection">
        <?php include 'kitchen.html'; ?>
    </div>

    <!-- banquet section -->
    <div class="banquetsection">
        <center>
            <h1>Banquet Section</h1>
        </center>
        <?php include 'banquetform.html'; ?>
    </div>

    <!-- laundrysection -->
    <div class="laundrysection">
        <center>
            <h1>Laundry Section</h1>
        </center>
        <?php include 'laundry.html'; ?>
    </div>

    <footer>
        <div class="box">
            <p>Contact Us</p>
            <p>Taukhel</p>
            <p>Phone:</p>
            <p>Email:</p>
        </div>
        <div class="box">
            <h4>Follow Us</h4>
        </div>
        <div class="box">

            &copy;<?php echo date("Y-M-D"); ?>
        </div>
    </footer>
</body>

<script src="../js/include.js"></script>

</html>