<?php
require "db_connect.php";
if(isset($_POST["sub"]))
{
$student_Name=$_POST["student_Name"];
$student_id=$_POST["student_id"];
$student_sec=$_POST["student_sec"];
$university=$_POST["university"];
$dept=$_POST["dept"];
$id=0;

$query=mysqli_query($connect,"select * from all_s");
while($row=mysqli_fetch_array($query))
{
 $id=$row['id'];
 $rib=$row['username'];
}
echo  $rib ."<br>".$id;
header('Location:login.php');

$query=mysqli_query($connect,"insert into $rib(student_Name,student_id,student_sec,university,dept) values('$student_Name','$student_id','$student_sec','$university','$dept')");
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
        <h1>Student Information</h1>
        <div class="B">
        <input type="text" name="student_Name" placeholder="Enter Student Full Name">
        <input type="number" name="student_id" placeholder="Enter Student Id" >
        <input type="text" name="student_sec" placeholder="Enter Section" >
        <input type="text" name="university" placeholder="Enter University Name" >
        <input type="text" name="dept" placeholder="Enter Department Name" >
        <input type="submit" name="sub" value="submit" id="su" >
        </div>
       </div>
    </form>
  </div>
    
</body>
</html>