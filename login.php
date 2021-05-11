<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
    
 <link rel="stylesheet" href="signin.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
     
    </head>
    <body>
           <div class="logo">
             <img src="NEWLOGO.png">
             <img src="light_new.png">
             </div>
        
        
          <div class="light1">
              <article class="light2" style="max-width: 400px"><h4 class="light3"> Login </h4></article>
                <p class="light4">Get started with your free account</p>
                <p> 
                  <a href="" class="btn_gmail"><i class="fa fa-google"></i>Login via gmail</a><br>
                   <a href="" class="btn_fb"><i class="fa fa-facebook-f"></i>Login via facebook</a>
                     </p>
                      <p class="divide1"><span class="light5">OR</span></p>
                      <hr>
                               <h4>Login Here to access an Awesome World</h4>
                       <form action="" method="POST">
      
                             <div class="light6">
       
                    <input name="email" class="light9" placeholder="Email Address" type="email" required>
                        </div>
           
                         <div class="light6">
                            <input name="password" class="light9" placeholder="Password" type="password" required>
        </div>
           
            <button class="btn" name="submit" type="submit">Login Now</button>
        
        
        </form>
        <div ><p class="light4">Don't Have an acount ?<a href="index.php" title="Login page">Sign Up</a> </p></div>
        <hr>
        
        </div>
    
    </body>

</html>