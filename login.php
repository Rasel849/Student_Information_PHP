<?php
require "db_connect.php";
if(isset($_POST["sub"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    
}

$query=mysqli_query($connect,"insert into all_s(username) values('$username')");

$query=mysqli_query($connect,"select * from login");
$flag=0;

while($row=mysqli_fetch_array($query))
{
    if($username==$row['username']&&  $password==$row['password'])
    {
        $flag=1;

    }
    else if($username==$row['username']&&  $password!=$row['password'])
    {
        $flag=2;
        $error="wrong password";

    }
}


if($username!=""&&  $password!="")
{
    if($flag==0)
    {
        $query=mysqli_query($connect,"insert into login(username,password) values('$username',' $password')");
        $query=mysqli_query($connect,"create table $username(id int not null auto_increment,student_Name varchar(255) not null,student_id int not null
        ,student_sec varchar(2),university varchar(255),dept varchar(255),primary key(id))");
        
        header('Location:student_information.php');
    }
    else if($flag==2)
    {
        echo $error;
    }
    else{
        
        header('Location:student_information.php');
    }
 
}


?>

<!DOCTYPE html>
<head>
    <title>Student Information</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="AA">
    <form action="" method="post">
        <div class="A">
        <h1>Login</h1>
        <div class="B">
        <input type="text" name="username" placeholder="Enter username">
        <input type="password" name="password" placeholder="Enter password" >
        <input type="submit" name="sub" value="login" id="su" >
        </div>
       </div>
    </form>
  </div>
    
</body>
</html>
