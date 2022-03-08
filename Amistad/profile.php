<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include ("connection.php");

if (isset($_POST["submit"])) {
    $full_name = mysqli_real_escape_string($con, $_POST["full_name"]);
    $password = mysqli_real_escape_string($con, md5($_POST["password"]));
    $cpassword = mysqli_real_escape_string($con, md5($_POST["cpassword"]));

    if ($password === $cpassword) {
        $photo_name = $_FILES["photo"]["name"];
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
            $sql = "UPDATE users SET full_name='$full_name', password='$password', photo='$photo_new_name' WHERE id='{$_SESSION["user_id"]}'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not be Updated.');</script>";
                echo  $con->error;
            }
        }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3ef5793f40.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Amistad - Edit Profile</title>
</head>
<body class="profile-page">
    <nav>
        <div class="left-navbar">
            <a href="index.php"><img src="images/logo.png" class="logo"></a>
            <ul>
                <li><img src="images/inbox.png"></li>
                <li><img src="images/video.png"></li>
                <li><img src="images/notification.png"></li>
            </ul>
        </div>
        <div class="right-navbar">
            <div class="search">
                <img src="images/search.png">
                <input type="text" placeholder="busqueda!">
            </div>
            <div class="profile-pic online" onclick="settingsMenuToggle()">
                <img src="images/profile-pic.png">
            </div>
        </div>

        <div class="settings-menu">
            <div id="dark-btn">
                <span></span>
            </div>
            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>Abhishek Raj</p>
                        <a href="profile.php?action=view">
                    </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div>
                        <p>Give feedback</p>
                        <a href="#">Help us to improve.</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="#">Help & Support <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="logout.php">Logout <img src="images/arrow.png" width="10px"></a>
                </div>

            </div>
        </div>

    </nav>

    <div class="wrapper">
        <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php 
            
            $sql = "SELECT * FROM users WHERE user_id='{$_SESSION["user_id"]}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="inputBox">
                <input type="text" id="user_name" name="user_name" placeholder="Full Name" value="<?php echo $row['user_name']; ?>" required>
            </div>
            <div class="inputBox">
                <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $row['email']; ?>" disabled required>
            </div>
            <div class="inputBox">
                <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $row['password']; ?>" required>
            </div>
            <div class="inputBox">
                <label for="photo">Photo</label>
                <input type="file" accept="image/*" id="photo" name="photo" required>
            </div>
            <img src="images/uploads/" width="150px" height="auto" alt="photo">
            <?php
				}
            }

            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>

<div class="footer">
    <p>Copyright 2021 - Amistad</p>
</div>

<script src="script.js"></script>

</body>
</html>