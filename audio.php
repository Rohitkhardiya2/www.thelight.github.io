<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!doctype html> 
<html lang="en"> 
<head>  
<meta charset="UTF-8">  
<title>::THE LIGHT::</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="audio.css"> 
     <link rel="icon" href="favicon-32x32.png" type="image/gif" sizes="32x32">
</head> 
 
<body>
<div id="back">
<div id="logo">
 <img src="NEWLOGO.png" class="rotate" />   
   <img src="light_new.png"/>
    <div>
  
<label for="show-menu" class="show-menu">Show Menu</label>  
<input type="checkbox" id="show-menu" role="button">   

<ul id="menu">   <li><a href="home.php">HOME</a></li>   
<li>    <a href="Shayri.php">SHAYRI￬</a>    
<ul class="hidden">     
<li>
<a href="#">ROMANTIC</a></li>     
<li><a href="#">HEART TOUCH</a></li>
    <li><a href="#">MOTIVATIONAL</a></li>
    <li><a href="#">EMOTIONAL</a></li> 
    <li><a href="#">ATTITUDE</a></li> 
    <li><a href="#">LOVE</a></li> 
    <li><a href="#">REALITY</a></li> 
    <li><a href="#">FUNNY</a></li> 
    <li><a href="#">POEMS</a></li>
    <li><a href="#">2 LINER SHER</a></li> 
</ul>   
</li>  
 <li>    
 <a href="audio.php">AUDIO ￬</a>    
 <ul class="hidden">     
 <li><a href="#">SIMPLE AUDIO</a></li>     
 <li><a href="#">BGM SHAYRI</a></li> 
 </ul>   
 </li>   
 <li><a href="video.php">VIDEOS</a></li>
 
 
 <li><a href="contact.php">CONTACT￬</a>
 <ul class="hidden">     
  <li><a href="#" target="_blank">RANJIT</a></li>
     <li><a href="#" target="_blank">SURYA</a></li>
     <li><a href="#" target="_blank">ROHIT</a></li>
 </ul>
 </li>
 </ul>
    </div>
 <div class="logout">
     <?php echo "<h3><b>Welcome -[</b> " . $_SESSION['username'] . "<b>]- </b></h3>"; ?>
    <a href="logout.php"><button class="logout1">Logout</button></a>
    </div>
    <div id="banner">
        <img src="try1.png"/>
    
    </div>
    <div class="footer">
            <a href="home.php"> <h4>&#169 www.thelight.co.in</h4></a>
            <!-- hitwebcounter Code START -->
<a href="#" class="counter">
<img class="counter" src="https://hitwebcounter.com/counter/counter.php?page=7810118&style=0009&nbdigits=5&type=page&initCount=0" title="Total Visitor" Alt="web counter"   border="0" /></a>                
    </div>
    </div>

    </div>
                
    
    
 </body> 
 </html> 