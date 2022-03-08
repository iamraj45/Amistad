<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email) && !empty($first_name) && !empty($last_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,first_name,last_name) values ('$user_id','$user_name','$password','$email','$first_name','$last_name')";

			mysqli_query($con, $query);

			header("Location: login.php");
			
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to Amistad</title>
    <script src="https://kit.fontawesome.com/3ef5793f40.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
				<img src="images/logo2.png" class="logo">
				<h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
				<div class="input_field">
					<input id="text" type="text" name="user_name" placeholder="Username" required>
				</div>
				<div class="input_field">
					<input type="email" name="email" placeholder="Email" required />
				</div>
				<div class="input_field">
					<input type="password" id="password" name="password" placeholder="Password" required />
				</div>
				<div class="input_field">
					<input type="password" id="confirm_password" name="password" placeholder="Re-type Password" required />
				</div>
				<div class="input_field">
					<input type="text" name="first_name" placeholder="First Name" />
				</div>
				<div class="input_field">
					<input type="text" name="last_name" placeholder="Last Name" required />
				</div>
				<div class="input_field checkbox_option">
					<input type="checkbox" id="cb1" required/>
					<label for="cb1">I agree with terms and conditions</label>
				</div>
				<input class="button" type="submit" value="Sign Up" />
            </form>
        </div>
    </div>
    
	<script src="script_pass.js"></script>

</body>
</html>