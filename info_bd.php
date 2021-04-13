<?php 
    include('sever.php');
    session_start(); 
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $id = $_POST['id_code'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phone_number'];
    $date = $_POST['date'];
    $room = $_POST['room'];
    $e_name = $_POST['emergency_name'];
    $relation = $_POST['relation'];
    $e_number = $_POST['emergency_number'];
    echo $name;
    $sql = "INSERT INTO `info` (`name`,`lastname`,`address`,`id_code`,`phonenumber`,`date`,`room`,`emergency_name`,`relation`,`emergency_number`) VALUE ('$name','$lastname','$address',$id,$phonenumber,'$date','$room','$e_name','$relation',$e_number)";
    $query = mysqli_query($conn, $sql);
    $sql = "UPDATE room SET `status`='ไม่ว่าง' WHERE number_room = $room";
    mysqli_query($conn,$sql);
    header('location: index.php');
?>

