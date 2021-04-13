<?php
session_start();
?>
<html>

<head>
  <title>Phuangngern Rental</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!--Icon Top-->
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="icon" href="images/icon.png">
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
      <a href="roomcheck.php" class="w3-bar-item w3-button">Check Room</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
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

  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h4 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT ROOM AND HOUSES</span></h4>
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p>แบบที่ 1 ห้องพัดลมราคา 1,400 บาท/ห้อง และห้องพัดลมราคา 1,500 บาท/ห้อง</p>
        <p></p>
      </div>
      <img src="images/H4.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
      <img src="images/H5.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
      <p>ลักษณะจะเป็นห้องแถวยาวฝั่งละ 10 ห้อง จำนวนทั้งสิ้น 20 ห้อง</p>
      <p>โดยห้องราคา 1,500 บาทจะเป็นราคาของห้องที่อยู่ฝั่งริมสุด ส่วนห้องราคา 1,400 บาท จะเป็นห้องที่อยู่ตรงช่วงระหว่างกึ่งกลาง ซึ่งห้องพักราคานี้
        จะอยู่ลึกเข้าไปด้านในสุด</p>
    </div>
    <br>
    <hr>

    <div class="w3-content" style="max-width:700px">
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p>แบบที่ 2 ห้องพักแอร์ราคา 2,500 บาท/ห้อง และห้องพักแอร์ราคา 2,700 บาท/ห้อง </p>
        <p></p>
      </div>
      <img src="images/H8.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
      <p>ลักษณะของห้องพักจะเป็นห้องแถวยาว มีทั้งหมด 15 ห้องพัก</p>
      <p>โดยห้องพักราคา 2,500 บาทจะเป็นห้องพักแอร์ที่อยู่ช่วงกึ่งกลาง ส่วนห้องพักราคา 2,700 บาท จะเป็นห้องพักที่อยู่ริมซึ่งจะคิดราคาเพิ่มตรงกระจกฝั่งด้านข้าง</p>
    </div>
    <br>
    <hr>


    <div class="w3-content" style="max-width:700px">
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p>แบบที่ 3 บ้านพักแยกหลังราคา 3,500 บาท/หลัง </p>
        <p></p>
      </div>
      <img src="images/H3.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
      <p>ลักษณะของบ้านพักจะมีบ้านพักเป็นหลังทั้งหมด 4 หลัง</p>
      <p>โดยห้องพักราคา 2,500 บาทจะเป็นห้องพักแอร์ที่อยู่ช่วงกึ่งกลาง ส่วนห้องพักราคา 2,700 บาท จะเป็นห้องพักที่อยู่ริมซึ่งจะคิดราคาเพิ่มตรงกระจกฝั่งด้านข้าง</p>
    </div>
    <br>
    <hr>

  </div>

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

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <script>
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
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