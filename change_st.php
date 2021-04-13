<?php
    include('sever.php');
    $room = $_GET['room'];
    $sql = "UPDATE room SET `status`='ว่าง' WHERE number_room=$room ";
    mysqli_query($conn,$sql);

    $sql = "DELETE FROM `info` WHERE `room`='$room'";
    mysqli_query($conn,$sql);

    header('location:roomnhouse2.php');
?>