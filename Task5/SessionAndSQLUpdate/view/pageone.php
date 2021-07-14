<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="pagetwo.php"> MY Profile</a></h5>
<a href="addproduct.php"> ADD Product</a><br>
<a href="Search.php">Search</a><br>
<a href="showallproduct.php">Show All Data</a>

 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


