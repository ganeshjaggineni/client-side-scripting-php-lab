<?php
include("db.php");
$hackid = $_POST['hacker_id'];
$hackname = $_POST['hacker_name'];
$hackpwd = $_POST['hacker_pwd'];
$hackdob = $_POST['hacker_dob'];
$hackmobile = $_POST['hacker_mobile'];
$hackemail = $_POST['hacker_email'];
$hackskills = $_POST['hacker_skills'];
$hackstatus = $_POST['hacker_status'];

$query = "insert INTO hacker_info values('$hackid','$hackname','$hackpwd','$hackdob','$hackmobile','$hackemail','$hackskills','$hackstatus')";
$con=mysqli_query($conn,$query);
if($con)
{
    echo"<h1>Succesfully Inserted Hacker Data</h1";
}
else{
    echo"<h1>Faile to  Insert Hacker Data</h1";
}
?>