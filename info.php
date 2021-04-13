<?php
include('sever.php');
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phuangngern Rental</title>
  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!--Icon Top-->
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="icon" href="images/icon.png">

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
      <h3 class="w3-hide-medium w3-hide-small">ROOM AND HOUSE</h3>
    </div>
  <!--
    <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
      <a href="roomcheck.php" class="w3-bar-item w3-button">Check Room</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  -->
  </header>

  <div class="sidebar">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php"><i class="fas fa-home"></i> About</a>
      <a href="roomnhouse.php"><i class="fas fa-info-circle"></i> Room</i></a>
      <a href="statment.php"><i class="fas fa-inbox"></i> Statement</i></a>
      <a href="#"><i class="fas fa-envelope"></i> Contact</i></a>
      <?php if (!isset($_SESSION['username'])) : ?>
        <!--<button class="btn login">--><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        <!--</button>-->
      <?php endif ?>
      <!--<a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>-->
      <?php if (isset($_SESSION['username'])) : ?>
        <!--<button class="btn login">--><a href="index.php?logout=1"><i class="fas fa-sign-in-alt"></i> Logout</a>
        <!--</button>-->
      <?php endif ?>
    </div>
  </div>

  <div class="header">
    <h2>Contract</h2>
  </div>

  <form method="post" action="info_bd.php">
    <div class="input-group">
      <lable for="name">Name/ชื่อ </lable>
      <input type="text" name="name" placeholder="Your name..">
    </div>
    <div class="input-group">
      <lable for="lastname">Lastname/นามสกุล </lable>
      <input type="text" name="lastname" placeholder="Your Lastname..">
    </div>
    <div class="input-group">
      <lable for="id_code">ID/เลขบัตรประชาชน </lable>
      <input type="text" name="id_code" placeholder="ID..">
    </div>
    <div class="input-group">
      <lable for="address">Address/ที่อยู่ </lable>
      <input type="text" name="address" placeholder="Address..">
    </div>
    <div class="input-group">
      <lable for="phone_number">Phone_number/เบอร์โทรศัพท์ </lable>
      <input type="text" name="phone_number" placeholder="Your Number..">
    </div>
    <div class="input-group">
      <lable for="date">DATE/วันที่ </lable>
      <input type="text" name="date" placeholder="Your date..">
    </div>
    <div class="input-group">
      <lable for="room">ROOM/ห้อง </lable>
      <select id="room" name="room">
        <?php
        $sql = "SELECT * FROM room WHERE `status`= 'ว่าง'";
        $re = mysqli_query($conn, $sql);
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) { ?>
          <option value="<?php echo $row['number_room'] ?>"> <?php echo $row['number_room'] ?> </option>
        <?php } ?>
      </select>
    </div>
    ชื่อผู้ติดต่อฉุกเฉิน
    <div class="input-group">
      <lable for="emergency_name">Name/ชื่อ-นามสกุล </lable>
      <input type="text" name="emergency_name" placeholder="Your name..">
    </div>
    <div class="input-group">
      <lable for="relation">Relationship/ความสัมพันธ์ </lable>
      <select id="relation" name="relation">
        <option value="บิดา"> บิดา </option>
        <option value="มารดา"> มารดา </option>
        <option value="ญาติ"> ญาติ </option>
      </select>
    </div>
    <div class="input-group">
      <lable for="emergency_number">Phone_number/เบอร์โทรศัพท์ </lable>
      <input type="text" name="emergency_number" placeholder="Your Number..">
    </div>
    <div class="input-group">
      <button type="submit" name="submit" class="btn">Submit</button>
    </div>
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