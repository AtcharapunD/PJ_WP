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
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="navbar">
        <div class="topnav" id="myTopnav">
            <a href="admin.php" class="active">Home</a>
            <a href="roomnhouse2.php">Status</a>
            <a href="receipt.php">Receipt</a>
            <a href="login.php" class="right">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class = "header">
        <h2>RECEIPT</h2>
    </div>
    <form method="POST" action="receipt_db.php">
        <div class="input-group">
            <lable for="number_room">ROOM/ห้อง</lable>
            <select id="room" name="number_room" >
                <?php 
                    $sql = "SELECT * FROM room WHERE `status`= 'ไม่ว่าง'";
                    $re = mysqli_query($conn,$sql);
                ?>
                <?php 
                while($row = mysqli_fetch_array($re)) {?>
                <option value="<?php echo $row['number_room'] ?>"> <?php echo $row['number_room'] ?> </option>
                <?php }?>
            </select>
        </div>
        <div class="input-group">
            <lable for="w_before">ค่าน้ำ มิเตอร์ก่อน</lable>
            <input type="text" name="w_before">
            <lable for="w_after">มิเตอร์หลัง</lable>
            <input type="text" name="w_after">
        </div>
        <div class="input-group">
            <lable for="e_before">ค่าไฟ มิเตอร์ก่อน</lable>
            <input type="text" name="e_before">
            <lable for="e_after">มิเตอร์หลัง</lable>
            <input type="text" name="e_after">
        </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Submit</button> 
        </div>
    </form>
    </body>
</html>