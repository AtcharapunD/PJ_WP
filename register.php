<?php 
    session_start();
    include('sever.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if(isset($_SESSION['error'])) : ?>
            <div class = "error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-proup">
            <lable for="username">Username</lable>
            <input type="text" name="username">
        </div>
        <div class="input-proup">
            <lable for="email">Email</lable>
            <input type="email" name="email">
        </div>
        <div class="input-proup">
            <lable for="password_1">Password</lable>
            <input type="password" name="password_1">
        </div>
        <div class="input-proup">
            <lable for="password_2">Confirm Password</lable>
            <input type="password" name="password_2">
        </div>
        <div class="input-proup">
            <button type="submit" name="reg_users" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>