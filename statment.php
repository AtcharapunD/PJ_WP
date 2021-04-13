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
  <header class="w3-display-container w3-content w3-center" style="max-width:1920px">
    <img class="images" src="images/BG6.jpg" alt="BGHead" width="1920" height="500">
    <div class="w3-padding w3-display-topleft" id="main">
      <span style="font-size:25px;cursor:pointer" onclick="openNav()"><i class="fas fa-list"></i> MENU</span>
    </div>
    <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-black w3-center">
      <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">PHUANGNGERN RENTAL</h1>
      <h5 class="w3-hide-large" style="white-space:nowrap">PHUANGNGERN RENTAL</h5>
      <h3 class="w3-hide-medium w3-hide-small">STATEMENT</h3>
    </div>

    <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
      <a href="roomcheck.php" class="w3-bar-item w3-button">Check Room</a>
      <!--<a href="#contact" class="w3-bar-item w3-button">Contact</a>-->
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

  

  <div class="alert" align="center">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong><h2>ATTENTION!!</h2></strong> <h4>Please read info below before you click go do statement</h4>
  </div>

  <div class="w3-content" style="max-width:700px">
    <h2>กฎการเช่า</h2>
    <br>
    <d1>
      <dt>1.ผู้เช่าตกลงเช่าบ้านเช่าของเครือPhuangngern เพื่อเป็นประโชยน์ในการอาศัย ในอัตราเช่าได้แก่(1400/1500/2500/2700/3500)ต่อเดือน โดยมีกำหนดการเช่า 2 เดือน มีค่าใช้จ่ายประกันแรกเข้า 600 บาท เมื่อผู้เช่าได้เช่าบ้านจนครบกำหนดเวลา หากผู้เช่ามิได้แจ้งยกเลิกการเช่าให้ถือว่าสัญญาฉบับนี้มีผลบังคับใช้ต่อไปทุกระยะเวลาการเช่า หากผู้เช่าประสงค์จะยกเลิกการเช่าต้องแจ้งให้ทราบล่วงหน้า 30วัน</dt>
      <br>
      <dt>2.ผู้เช่าตกลงชำระค่าเช่าให้แก่ผู้ให้เช่าเป็นการล่วงหน้าภายในวันที่ 5 ของทุกเดือน ถ้าหากชำระเกินวันดังกล่าวผู้เช่ายินยอมเสียค่าปรับในอัตราวันละ 100 บาท</dt>
      <br>
      <dt>3.ผู้เช่าต้องดูแลรักษาความสะอาดบริเวณบ้านของผู้เช่าเอง </dt>
      <br>
      <dt>4.ผู้เช่าต้องรับผิดชอบในความเสียหาย การสูญหายและการบุบสลายใดๆ อันเกิดแก่บ้านอาศัยและทรัพย์สินต่างๆ ในบ้านพักดังกล่าวและผู้เช่าต้องยินยอมให้ผู้ให้เช่าหรือตัวแทนของผู้ให้เช่าเข้าตรวจสอบดูบ้านเช่าได้เป็นครั้งคราว </dt>
      <br>
      <dt>5.หากมีทรัพย์สินเสียหายโดยเกิดจากอายุไขหรือความเสียหายตามการเวลา ผู้เช่าสามารถเบิกได้จากร้านค่าในเครือ แต่ถ้าหากความเสียหายเกิดขึ้นจากผู้เช่า ทางผู้เช่าต้องป็นคนรับผิดชอบด้วยตนเอง</dt>
      <br>
      <dt>6.ผู้เช่าต้องแจ้งชื่อที่อยู่ให้แก่ผู้ให้เช่าทราบก่อนที่ผู้เช่าจะนำบริวารเข้าพัก</dt>
      <br>
      <dt>7.ผู้เช่าสัญญาว่าจะพักอยู่ในห้องด้วยความสงบ ไม่กระทำหรือยินยอมให้ผู้อื่นกระทำการใดๆ ภายในหรือภายนอกบ้านเช่า อันเป็นการขัดต่อกฎหมายหรือศีลธรรมอันดี หรือก่อให้เกิดความเดือดร้อนรำคาญแก่ผู้พักรายอื่น</dt>
      <br>
      <dt>8.ผู้เช่าสัญญาว่าจะไม่นำสัตว์เลี้ยง วัตถุไวไฟ อาวุธ วัตถุระเบิด สิ่งเสพติด ของมึนเมา สุรา และสิ่งผิดกฎหมายเข้ามาในบริเวณบ้านเช่า หากเกิดความเสียหายผู้ให้เช่าจะไม่รับผิดชอบใดๆ</dt>
      <br>
      <dt>9.ผู้เช่าสัญญาว่าจะไม่ทิ้งสิ่งที่จะทำให้เกิดการอุดตัน ลงในท่อน้ำทิ้งหรือชักโครก หากเกิดการอุดตันผู้เช้าจะต้องรับผิดชอบค่าใช้จ่ายดังกล่าวเอง</dt>
      <br>
      <dt>10.ผู้เช่าจไม่ทำการดัดแปลงทรัพย์สินต่างๆ ในบ้านเช่า หรือเคลื่อนย้ายทรัพย?สินต่างๆออกนอกตัวบ้าน และไม่ทำการตอก เจาะ หรือขันน็อตที่ผนัง แพดานบ้านพักหรือทรัพย์สินใดๆ ในบ้านพัก หากฝ่าฝืนผู้เช่ายินยอมจ่ายค่าเสียหายแก่ผู้ให้เช่า</dt>
      <br>
      <dt>11.ผู้เช่าสัญญาว่าจะปฎิบัติตามระเบียบ ข้อบังคับ และประกาศของผู้ให้เช่า ซึ่งได้แจ้งให้ทราบโดยการติดประกาศไว้ในจุดต่างๆ </dt>
      <br>
      <dt>12.ผู้ให้เช่าจะไม่รับผิดชอบในความสูญหายหรือความเสียหายใดๆ อันเกิดขึ้นแก่ทรัพย์สินภายในบ้านพัก ยานพาหนะ รวมทั้งทรัพย์สินต่างๆ ในยานพาหนะของผู้เช่าซึ่งนำมาจอดบริเวณพื่นที่ของเครือ</dt>
      <br>
      <dt>13.ในกรณียอดคค้างชำระเกิน 1 เดือน ผู้เช่าจะยินยอมให้ผู้ให้เช่าครอบครองบ้านพักได้ทันทีและให้ถือว่าสัญญาการเช่ายุติ ผู้ให้เช่าสามารถไขกุญแจเข้าห้องได้โดยพลการ หากมีทรัพย์สินของผู้เช่าอยู่ ผู้ให้เช่าจะเก็บรักษาไว้ให้ (ผู้เช่านำออกภายใน7วัน) และหากจำเป็นก็ยินยอมให้นำออกขายเพื่อชำระค่าเช่าที่ค้างชำระ หรือหากของที่เก็บไว้ทำให้ผู้อื่นเดือดร้อน ผู้เช่าจะยินยอมให้ทำลายทิ้ง</dt>
      <br>
      <dt>14.ถ้าผู้เช่ายกเลิกสัญญาก่อนครบกำหนดตามสัญญา หรือผู้เช่าไม่ปฏิบัติตามสัญญานี้ด้วยเหตุใดๆ ผู้ให้เช่ามีสิทธิ์เชิญผู้เช่าออกจากห้องพัก โดยต้องจ่ายค่าสาธารณูประโภคทั้งหมดก่อนการขนย้ายทรัพย์สินของผู้เช่าและบริวารออกไป</dt>
      <br>
      <dt>15.ในกรณีเช่าบ้านรายวัน ผู้เช่าต้องปฏิบัติตามดังนี้</dt>
      <dd>• กรอกสัญญาเช่ารายวัน โดยมายื้นสัญญาที่กรอกแก่ผู้เช่ากับผู้ให้เช่า</dd>
      <dd>• ชำระเงินรายวันคืนละ 300 บาท (โดยไม่เสียค่าสาธารณูปรธโภคใดๆ)</dd>
      <dd>• เมื่อครบกำหนดเช่า ให้นำทรัพย์สินของผู้เช่าออก หากมีการลืมทรัพย์สินสำคัญทางผู้ให้เช่าจะเก็บรักษาไว้ให้(ผู้เช่าต้องมารับภายใน7วัน) หากไม่มารับทางผู้ให้เช่าจะขอริบทรัพย์สินนั้นๆไป</dd>
      <br>
      <dt>16.ในกรณีมีการย้ายออก ผู้เช่าต้องปฏิบัติดังนี้</dt>
      <dd>• ส่งมอบกุญแจคืนแก่ผู้ให้เช่า ชำระค่าสาธารณูประโภคต่างๆ คืนบ้านเช่าในลักษณะที่สะอาด เรียบร้อย เช่นเดียวกับเมื่อผู้เช่าเริ่มเข้าพัก </dd>
      <dd>• ขนทรัพย์สินของผู้เช่าออกจากบ้านพัก โดยต้องให้แล้วเสร็จ (สามารถขนย้ายได้ตั้งแต่เวลา 8.00-16.00น .) ภายในวันที่มีการขนย้าย</dd>
      <br>
    </d1>

  </div>
  <br>
  <hr>
  <br>
  <!--into info-->
  <?php if (isset($_SESSION['username'])) : ?>
    <div class="input-group" align="center">
      <input type="checkbox" name="chekbox" onchange="onbutton(this)">
      <label for="vehicle">ยอมรับเงื่อนไขการเช่า</label><br>
      <br>
      <button class="w3-button w3-black" onclick="window.location.href='info.php'" id="lastbtn" disabled>ทำสัญญา</button>
    </div>
  <?php endif ?>
  <br>
  <br>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    function onbutton(x) {

      if (x.checked) {
        document.getElementById("lastbtn").removeAttribute("disabled");
      } else {
        document.getElementById("lastbtn").setAttribute("disabled", "disabled");
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