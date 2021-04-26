<?php session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usernamen']);
    header('location: index.php');
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phuangngern Rental</title>

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
        <div class="w3-padding w3-display-topleft" id="main">
            <span style="font-size:25px;cursor:pointer" onclick="openNav()"><i class="fas fa-list"></i> MENU</span>
        </div>
        <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-black w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">PHUANGNGERN RENTAL</h1>
            <h5 class="w3-hide-large" style="white-space:nowrap">PHUANGNGERN RENTAL</h5>
            <h3 class="w3-hide-medium w3-hide-small">YOUR WELCOME</h3>
        </div>
    </header>

    <div class="sidebar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php"><i class="fas fa-home"></i> About</a>
            <a href="roomnhouse.php"><i class="fas fa-info-circle"></i> Room</i></a>
            <a href="statment.php"><i class="fas fa-inbox"></i> Statement</i></a>
            <?php if (!isset($_SESSION['username'])) : ?>
                <!--<button class="btn login">--><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                <!--</button>-->
            <?php endif ?>
            <!--<a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>-->
            <?php if (isset($_SESSION['username'])) : ?>
                <!--<button class="btn login">--><a href="index.php?logout=1"><i class="fas fa-sign-in-alt"></i> Logout</a><!--</button>-->
            <?php endif ?>
        </div>
    </div>

    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT PHUANGNGERN RENTAL</span></h5>
            <p>บ้านพักของพวงเงิน เป็นบ้านพักที่เปิดให้บริการแก่คนงานที่ทำงานอยู่ในระเวกนั้นซึ่งมีจำนวนมาก บ้างก็เดินทางมาทำงานจากที่ไกลๆจึงต้องมีบ้านพักใกล้ๆเพื่อสะดวกต่อการไปทำงาน</p>
            <p></p>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>บ้านพักราคาถูกพร้อมให้บริการทุกท่านแล้ว ติดต่อเข้ามาได้เลย</i></p>
                <p></p>
            </div>
            <img src="images/BG9.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
            <p><strong>Opening hours:</strong> everyday from 6am to 8pm.</p>
            <p><strong>Address:</strong> 3/1 Moo 3, Tubkwang Kaeng Khoi , Saraburi </p>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.3)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>

    <br>
    <br>
    <div class="footer">
        <p>PhuangngernRental@2021 </p>
    </div>

</body>

</html>