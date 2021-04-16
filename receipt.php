<?php
include('sever.php');
session_start();

if (!isset($_SESSION['usernameadmin'])) {
    header('location: logad.php');
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Receipt</title>
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
            <h3 class="w3-hide-medium w3-hide-small">PAGE RECEIPT</h3>
        </div>

        <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
            <a href="admin.php" class="w3-bar-item w3-button">Home</a>
            <a href="roomnhouse2.php" class="w3-bar-item w3-button">Room & House</a>
            <a href="receipt.php" class="w3-bar-item w3-button">Receipt</a>
            <a href="admin.php?logout=1" class="w3-bar-item w3-button">Logout</a>
        </div>
    </header>

    <div class="sidebar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="roomnhouse2.php"><i class="fas fa-info-circle"></i> Room & House</i></a>
            <a href="receipt.php"><i class="fas fa-envelope"></i> Receipt</i></a>
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

        <br>

        <div class="header">
            <h2 align=center> RECEIPT</h2>
        </div>
        <form method="POST" action="receipt_db.php">
            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="number_room">ROOM/ห้อง</lable>
                <select class="w3-input w3-padding-16 w3-border" id="room" name="number_room">
                    <?php
                    $sql = "SELECT * FROM room WHERE `status`= 'ไม่ว่าง'";
                    $re = mysqli_query($conn, $sql);
                    ?>
                    <?php
                    while ($row = mysqli_fetch_array($re)) { ?>
                        <option value="<?php echo $row['number_room'] ?>"> <?php echo $row['number_room'] ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="w_before">ค่าน้ำ มิเตอร์ก่อน</lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="w_before">
                <lable for="w_after">มิเตอร์หลัง</lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="w_after">
            </div>
            <div class="w3-content" style="max-width:700px" align=center>
                <lable for="e_before">ค่าไฟ มิเตอร์ก่อน</lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="e_before">
                <lable for="e_after">มิเตอร์หลัง</lable>
                <input class="w3-input w3-padding-16 w3-border" type="text" name="e_after">
            </div>
            <br>
            <div class="w3-content" style="max-width:700px" align=center>
                <button class="w3-button w3-black" type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
        <br>
        <br>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginRight = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.3)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginRight = "0";
                document.body.style.backgroundColor = "white";
            }
        </script>
</body>

</html>