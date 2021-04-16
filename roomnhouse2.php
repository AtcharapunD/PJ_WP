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
  <title>Page Room&House</title>
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
      <h3 class="w3-hide-medium w3-hide-small">PAGE CHECK ROOM & HOUSE</h3>
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
    <br>

    <table style="max-width:700px" align="center">
      <tr>
        <td>
          <p><b> NO.room </b></p>
        </td>
        <td>
          <p><b> Type Room </b></p>
        </td>
        <td>
          <p><b> Price </b></p>
        </td>
        <td>
          <p><b> Status </b></p>
        </td>
        <td>
          <p><b> Out? </b></p>
        </td>
      </tr>
      <?php
      $sql = "SELECT * FROM room ";
      $re = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($re)) { ?>
        <tr align=center>
          <td><?php echo $row['number_room'] ?></td>
          <td><?php echo $row['type'] ?></td>
          <td><?php echo $row['price'] ?></td>
          <td><?php echo $row['status'] ?></td>
          <td>
            <?php if ($row['status'] == 'ไม่ว่าง') : ?>
              <a href="change_st.php?room=<?php echo $row['number_room'] ?>">ออก</a>
            <?php endif ?>
          </td>
        </tr>
      <?php } ?>
    </table>
    <br>
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