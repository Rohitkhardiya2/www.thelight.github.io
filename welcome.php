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
<link rel="stylesheet" href="C:\xampp\htdocs\thelight\signup\SHAYRI WEBSITE\CSS\home.css"> 
</head> 
 
<body>
<div>
<div id="back">
<div id="logo">
<img src="‪C:\xampp\htdocs\thelight\signup\SHAYRI WEBSITE\PHOTOS\NEWLOGO.png" class="rotate" />   
<img src="R:\WEBSITES\SHAYRI WEBSITE\PHOTOS\title1.png"/>
</div>
  <div>
<label for="show-menu" class="show-menu">Show Menu</label>  
<input type="checkbox" id="show-menu" role="button">   

<ul id="menu">   <li><a href="home.htm">HOME</a></li>   
<li>    <a href="2.%20Shayri.htm">SHAYRI￬</a>    
<ul class="hidden">     
<li>
<a href="R:\WEBSITES\SHAYRI WEBSITE\CONTENT\SHAYRI1.htm">ROMANTIC</a></li>     
<li><a href="R:\WEBSITES\SHAYRI WEBSITE\CONTENT\heart_touch.htm">HEART TOUCH</a></li>
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
 <a href="3.%20Audio.htm">AUDIO ￬</a>    
 <ul class="hidden">     
 <li><a href="R:\WEBSITES\SHAYRI WEBSITE\AUDIO LINK\simpleaudio.htm">SIMPLE AUDIO</a></li>     
 <li><a href="#">BGM SHAYRI</a></li> 
 </ul>   
 </li>   
 <li><a href="4.Video.htm">VIDEOS</a></li>
 
 
 <li><a href="5.Contact.htm">CONTACT￬</a>
 <ul class="hidden">     
 <li><a href="R:\WEBSITES\SHAYRI WEBSITE\forms\ranjeet.htm"  target="_blank">RANJIT</a></li>
     <li><a href="R:\WEBSITES\SHAYRI WEBSITE\forms\surya.htm" target="_blank">SURYA</a></li>
     <li><a href="R:\WEBSITES\SHAYRI WEBSITE\forms\blog.htm" target="_blank">ROHIT</a></li>
 </ul>
 </li>
 </ul>
    </div>
 
    <div id="banner">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
        <img class="banner" src="R:\WEBSITES\SHAYRI WEBSITE\PHOTOS\title3.png"/>
    </div>
    
    </div>
    </div>
    
 </body> 
 </html> 