<?php 
include("db.php");
$regno = $_GET["stureg"];
$sname = $_GET["stuname"];
$pass = $_GET["stupwd"];
$gen = $_GET["stugen"];
$dob = $_GET["studob"];
$course = $_GET["stucourse"];
echo "<h1>Student Details</h1>";
echo "</br>Student Reg.No&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$regno;
echo "</br>Student name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$sname;
echo "</br>Student Password&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pass;
echo "</br>Student Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$gen;
echo "</br>Student DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$dob;
echo "</br>Student Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$course;
$sql="INSERT INTO student_details values('$regno','$sname','$pass','$gen','$dob','$course')" ;
if(mysqli_query($conn,$sql))
{
echo "<h1>Record Inserted Succesfully</h1>";
}
else
{
echo "<h2>Record not Inserted</h2>";
}
?>