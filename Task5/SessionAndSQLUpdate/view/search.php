<?php
include "..\control\searchvalidation.php";
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Search Product </h2>
<form action='' method='post'>

Product Name: 
<input type='text' name="pname"><br><br>
<input type='submit' name="search" value="Search">

<h3><a href="pageone.php">Back</a></h3>
</form>
</body>
</html