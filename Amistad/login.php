<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo '<p class="message"><br><br>wrong username or password!</p>';
		}else
		{
            echo '<p class="message"><br><br>wrong username or password!</p>';
		}
	}

?>

<!--html-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amistad - login or signup</title>
    <script src="https://kit.fontawesome.com/3ef5793f40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <img src="images/logo1.png" class="logo">

    <div class="container" id="container">

        <div class="form-container sign-in-container">
            <form method = "POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" placeholder="Username" name="user_name" />
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password?</a>
                <button type = "submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <a href="signup.php" class="ghost" id="signUp">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>