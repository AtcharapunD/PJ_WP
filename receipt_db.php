<?php
    include('sever.php');
    $no_room = $_POST['number_room'];
    $w_before = $_POST['w_before'];
    $w_after = $_POST['w_after'];
    $e_before = $_POST['e_before'];
    $e_after = $_POST['e_after'];


    $sql = "SELECT price FROM room WHERE number_room = $no_room";
    $re = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($re);
    $priceroom = $row['price'];
    $water =  ($w_after - $w_before)*7;
    $ele = ($e_after - $e_before)*7;
    $pricesum = ($water + $ele + 20)+ $priceroom;

    $date = date("d")."/".date("m")."/".date("Y");

    $sql = "INSERT INTO `receipt`(`number_room`,`w_before`,`w_after`,`e_before`,`e_after`,`price_room`,`date`) VALUE($no_room,$w_before,$w_after,$e_before,$e_after,$priceroom,'$date')";
    mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>ห้องที่<?php echo $no_room ?> </h2>
    <table>
        <tr>
            <td>ค่าห้อง</td>
            <td></td>
            <td></td>
            <td><?php echo $priceroom ?></td>
            <td>บาท</td>
        </tr><br>
        <tr>
            <td>ค่าไฟฟ้า</td>
            <td></td>
            <td></td>
            <td><?php echo $ele ?></td>
            <td>บาท</td>
        </tr><br>
        <tr>
            <td>ค่าน้ำ</td>
            <td></td>
            <td></td>
            <td><?php echo $water ?></td>
            <td>บาท</td>
        </tr><br>
        <tr>
            <td>ค่าขยะ</td>
            <td></td>
            <td></td>
            <td>20</td>
            <td>บาท</td>
        </tr><br>
        <tr>
            <td>รวมเป็นเงิน</td>
            <td></td>
            <td></td>
            <td><?php echo $pricesum ?></td>
            <td>บาท</td>
        </tr><br>
    </table>
</body>
</html>