<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "thelight";

$conn = mysqli_connect($server,$user,$password,$db) or die("could not connect to database");

if($conn){
    ?>
<script> 
    alert("Connection Sucessfull")
</script>
  <?php  
} 
else{
    
    ?>
    <script>

alert("No Connection")
</script>
<?php
}
?>