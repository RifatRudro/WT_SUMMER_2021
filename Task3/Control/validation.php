<?php

$validatepassword="";
$validatecomment="";
$validateradio="";
$validatecheckbox="";
$validateemail=""; 
$v1=$v2=$v3="";
$Name=""; 
$email="";
$Comment=""; 
$Password=""; 
$validfile="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Comment=$_REQUEST["comment"];
$validateemail="";
$Password=$_REQUEST["password"];

if(!empty($Name) && strlen($Name)>=6) 
{
    $Name="You Name Is ".$Name;
}

else if(empty($Name))
{
    $Name="Field Must Be fulfilled ";
}
else if( strlen($Name)<5)
{
    $Name="Name Must Have 4 character !!";
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You Must Enter Valid Email";
}
else{
    $validateemail= "Your Email is ".$email;
}


if(strlen($Password)<8)
{
    $validatepassword=" Password Must Contain 8 character!!";
}
else{
    $validatepassword=$Password;
}



if(strlen($Comment)<20)
{
    $validatecomment=" Comment Must Contain 20 character!!";
}
else{
    $validatecomment=$Comment;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender - ".$_REQUEST["gender"];
}
else{
    $validateradio= "       Please Select Your Gender";
}



if(!isset($_REQUEST["Dancing"])&&!isset($_REQUEST["Singing"])&&!isset($_REQUEST["Reading"]))
{
    $validatecheckbox = "Please Select at Least One Checkbox";
    
}
else{
    
   if(isset($_REQUEST["Dancing"]))
   {
       $v1= $_REQUEST["Dancing"];
   }
   if(isset($_REQUEST["Singing"]))
   { 
       $v2= $_REQUEST["Singing"];
   }
   if(isset($_REQUEST["Reading"]))
   {
    $v3= $_REQUEST["Reading"];
   }
   $validatecheckbox="Your Selected Hobby : ";
   $validatecheckbox=$validatecheckbox.$v1.",".$v2.",".$v3; 
   
}
$target_File="files/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploaded a new file";
    echo "<img src='".$target_File."'>";
}

else 
$validfile= "Sorry ,There is an problem"; 

}
 ?>
