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
<link rel="stylesheet" href="home.css"> 
    <link rel="icon" href="favicon-32x32.png" type="image/gif" sizes="32x32">
</head> 
 
<body>
<div>
<div id="back">
<div id="logo">
<img src="NEWLOGO.png" class="rotate" />   
<img src="light_new.png"/>
    
</div>
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
 <li><a href="#"  target="_blank">RANJIT</a></li>
     <li><a href="#" target="_blank">SURYA</a></li>
     <li><a href="#" target="_blank">ROHIT</a></li>
 </ul>
 </li>
 </ul>
    </div>
    <div class="logout">
     <?php echo "<h3><b>Welcome -[</b> " . $_SESSION['username'] . "<b>]- </b></h3>"; ?>
    <a href="logout.php"> <button class="logout">Logout</button></a>
    </div>
 
    <div id="banner">
    <div class="welcome_note">
        <h2>
        Welcome to our amazing website.
        </h2>
        <hr>
        <h3 class="text">
        दिल को छू लेने वाली और बहुत ही मजेदार शब्दों से भरी इस वेबसाइट में आपका स्वागत है ।<br>
            
यह वेबसाइट एक <b>MULTI-CONTENT PROVIDE</b>  करने वाली वेबसाइट है ।<br>
            इसका निर्माण <a class="own" href="blog.htm" title="Know More About Rohit Khardiya" target="_blank">रोहित खारड़िया </a> के द्वारा किया गया है तथा इन्ही के द्वारा ये वेबसाइट होस्ट की जाती है।<br>
            इस वेबसाइट में उपलब्ध <b>CONTENT</b> <a class="own" href="surya.htm" title="Know More About Suryakant Khardiya" target="_blank">सूर्यकांत</a> व <a class="own" href="ranjeet.htm" title="Know More About Ranjeet Singh" target="_blank">रणजीत सिंह </a> द्वारा बनाये गए है ।<br>
            आप भी अपनी शायरी, ग़ज़ल, कविता , ऑडियो-वीडियो आदि को हमें <b>E-mail</b> या <b>Whatsapp</b> पर भेज सकते है।<br>
साथ ही अपनी पसंद के ऑडियो-वीडियो व फोटोग्राफी एडिट करा सकते है।<br><br>
            ********************<br>
            <b>Rohit Khardiya</b>    <br>
            Owner of<br>
            The Light.<hr>
        </h3>
        
        </div>
        <div class="pics">
        <img src="home.png" >
        </div>
        <div class="footer">
            <a href="home.php"> <h4>&#169 www.thelight.co.in</h4></a>
            <!-- hitwebcounter Code START -->
<a href="#" class="counter">
<img class="counter" src="https://hitwebcounter.com/counter/counter.php?page=7810118&style=0009&nbdigits=5&type=page&initCount=0" title="Total Visitor" Alt="web counter"   border="0" /></a>                
    </div>
    </div>
    
    </div>
    
    </div>
    
    
 </body> 
 </html> 
