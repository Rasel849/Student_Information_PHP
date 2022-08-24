<?php
$server="localhost";
$username="root";
$password="";
$db="student";
$connect=mysqli_connect("$server","$username","$password","$db");

if($connect==true)
{
    
}
else{
    die("Error".mysqli_connect());
}
?>