<?php
include('sever.php');

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Phuangngern Rental</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!--Icon Top-->
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
      <h3 class="w3-hide-medium w3-hide-small">ROOM AND HOUSE</h3>
    </div>

    <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
      <a href="roomnhouse.php" class="w3-bar-item w3-button">Room</a>
      <a href="statment.php" class="w3-bar-item w3-button">Statement</a>
    </div>
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

  <br>
  <br>
  <table style="max-width:700px" align="center">
    <div class="row">
      <div class="column">
        <table style="max-width:700px" align="center">
          <tr>
            <th>No.Room</th>
            <th>Type Room</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
          <?php
          $sql = "SELECT * FROM room WHERE `status`='ว่าง'";
          $re = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($re)) { ?>
            <tr>
              <th><?php echo $row['number_room'] ?></th>
              <th><?php echo $row['type'] ?></th>
              <th><?php echo $row['price'] ?></th>
              <th><?php echo $row['status'] ?></th>
            </tr>
          <?php } ?>
        </table>
      </div>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

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