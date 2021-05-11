<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM registration WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO registration (username, email, mobile, password)
					VALUES ('$username', '$email', '$mobile', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
                $mobile = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
 <link rel="stylesheet" href="register.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
     
    </head>
    <body>
            <div class="logo">
        <img src="NEWLOGO.png">
            <img src="light_new.png">
        </div>
        
        
    <div class="light1">
        <article class="light2" style="max-width: 400px"><h4 class="light3"> Create Account </h4></article>
        <p class="light4">Get started with your free account</p>
        <p> 
        <a href="" class="btn_gmail"><i class="fa fa-google"></i>Login via gmail</a><br>
        <a href="" class="btn_fb"><i class="fa fa-facebook-f"></i>Login via facebook</a>
        </p>
        <p class="divide1"><span class="light5">OR</span></p>
        <hr>
        <h4>Sign Up Here</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="light6">
        
            <input name="username" class="light9" placeholder="Full Name" type="text" required>
        </div>
         <div class="light6">
        <input name="email" class="light9" placeholder="Email Address" type="email" required>
        </div>
             <div class="light6">
        
            <input name="mobile" class="light9" placeholder="Mobile Number" type="text" required>
        </div>
             <div class="light6">
        
            <input name="password" class="light9" placeholder="Create Password" type="password" required>
        </div>
            <div class="light6">
        
            <input name="cpassword" class="light9" placeholder="Confirm Password" type="password" required>
        </div>
             
            <button class="btn" name="submit" type="submit">Sign Up</button>
        
        
        </form>
        <div ><p class="light4">Have an acount ? <a href="login.php" title="Login page">Log In</a> </p></div>
        <hr>
        
        </div>
    
    </body>

</html>