<?php
session_start();
include('sever.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Page</title>

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
            <h3 class="w3-hide-medium w3-hide-small">PAGE FOR ADMIN</h3>
        </div>
    </header>

    <div class="sidebar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <!--<a href="index.php"><i class="fas fa-home"></i> About</a>-->
            <a href="roomnhouse2.php"><i class="fas fa-info-circle"></i> Room & House</i></a>
            <a href="receipt.php"><i class="fas fa-inbox"></i> Receipt </i></a>
            <!--<a href="#"><i class="fas fa-envelope"></i> Contact</i></a>-->
            <?php if (!isset($_SESSION['username'])) : ?>
                <!--<button class="btn login">--><a href="logad.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                <!--</button>-->
            <?php endif ?>
            <!--<a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>-->
            <?php if (isset($_SESSION['username'])) : ?>
                <!--<button class="btn login">--><a href="admin.php?logout=1"><i class="fas fa-sign-in-alt"></i> Logout</a>
                <!--</button>-->
            <?php endif ?>
        </div>
    </div>

    <div class="w3-content" align=center>
        <h2>Login For Admin</h2>
    </div>
    <br>

    <form action="logad_db.php" method="post">
        <table>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="username"><b> Username</b></lable>
                <input class="w3-input w3-padding-16 w3-border" placeholder="Username" type="text" name="username">
            </div>
            <br>
            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="password"><b> Password</b></lable>
                <input class="w3-input w3-padding-16 w3-border" placeholder="Password" type="password" name="password">
            </div>
            <br>
            <div class="w3-content" style="max-width:700px" align=center>
                <button class="w3-button w3-black" type="submit" name="logad_admin" class="btn"><b> Login</b></button>
            </div>
        </table>

    </form>

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


</body>

</html>