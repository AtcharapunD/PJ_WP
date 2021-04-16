<?php
session_start();

if (!isset($_SESSION['usernameadmin'])) {
    header('location: logad.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usernameadmin']);
    header('location: logad.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="CSS/index.css">

</head>

<body>
    <header class="w3-display-container w3-content w3-center" style="max-width:1920px">
        <img class="images" src="images/BG6.jpg" alt="BGHead" width="1920" height="500">
        <!--
        <div class="w3-padding w3-display-topleft" id="main">
            <span style="font-size:25px;cursor:pointer" onclick="openNav()"><i class="fas fa-list"></i> MENU</span>
        </div>
        -->

        <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-black w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">PHUANGNGERN RENTAL</h1>
            <h5 class="w3-hide-large" style="white-space:nowrap">PHUANGNGERN RENTAL</h5>
            <h3 class="w3-hide-medium w3-hide-small">PAGE ADMIN</h3>
        </div>

        <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
            <a href="admin.php" class="w3-bar-item w3-button">Home</a>
            <a href="roomnhouse2.php" class="w3-bar-item w3-button">Room & House</a>
            <a href="receipt.php" class="w3-bar-item w3-button">Receipt</a>
            <a href="admin.php?logout=1" class="w3-bar-item w3-button">Logout</a>
        </div>
    </header>





    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">WELCOME TO PAGE ADMIN PHUANGNGERN RENTAL</span></h5>
            <p></p>
            <p></p>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>ใช้ในการจัดการระบบหลังบ้าน</i></p>
                <p></p>
            </div>
            <img src="images/BG9.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
            <p><strong>Opening hours:</strong> everyday from 6am to 8pm.</p>
            <p><strong>Address:</strong> 3/1 Moo 3, Tubkwang Kaeng Khoi , Saraburi </p>
        </div>
    </div>


</body>

</html>