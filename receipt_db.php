<?php
include('sever.php');
$no_room = $_POST['number_room'];
$w_before = $_POST['w_before'];
$w_after = $_POST['w_after'];
$e_before = $_POST['e_before'];
$e_after = $_POST['e_after'];


$sql = "SELECT price FROM room WHERE number_room = $no_room";
$re = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($re);
$priceroom = $row['price'];
$water =  ($w_after - $w_before) * 7;
$ele = ($e_after - $e_before) * 7;
$pricesum = ($water + $ele + 20) + $priceroom;

$date = date("d") . "/" . date("m") . "/" . date("Y");

$sql = "INSERT INTO `receipt`(`number_room`,`w_before`,`w_after`,`e_before`,`e_after`,`price_room`,`date`) VALUE($no_room,$w_before,$w_after,$e_before,$e_after,$priceroom,'$date')";
mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Receipt</title>
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
            <!--<a href="admin.php" class="w3-bar-item w3-button">Home</a>
            <a href="roomnhouse2.php" class="w3-bar-item w3-button">Room & House</a>
            <a href="receipt.php" class="w3-bar-item w3-button">Receipt</a>
            <a href="admin.php?logout=1" class="w3-bar-item w3-button">Logout</a>-->
        </div>
    </header>
    <br><br>
    <h5 align=center>ห้องที่ <?php echo $no_room ?></h2>
        <table style="max-width:700px" align="center">
            <tr>
                <td>ค่าห้อง</td>
                <td></td>
                <td></td>
                <td><?php echo $priceroom ?></td>
                <td>บาท</td>
            </tr>
            <tr>
                <td>ค่าไฟฟ้า</td>
                <td></td>
                <td></td>
                <td><?php echo $ele ?></td>
                <td>บาท</td>
            </tr>
            <tr>
                <td>ค่าน้ำ</td>
                <td></td>
                <td></td>
                <td><?php echo $water ?></td>
                <td>บาท</td>
            </tr>
            <tr>
                <td>ค่าขยะ</td>
                <td></td>
                <td></td>
                <td>20</td>
                <td>บาท</td>
            </tr>
            <tr>
                <td>รวมเป็นเงิน</td>
                <td></td>
                <td></td>
                <td><?php echo $pricesum ?></td>
                <td>บาท</td>
            </tr>
        </table>
        <br>
        <div class="w3-content" style="max-width:700px" align=center>
            <button class="w3-button w3-black" type="submit" class="btn"><a href="receipt.php"> Back</a></button>
        </div>
</body>

</html>