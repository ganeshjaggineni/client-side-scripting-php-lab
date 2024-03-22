<?php
include("db.php");
$hackid = $_POST['hacker_id'];
$hackname = $_POST['hacker_name'];
$hackdob = $_POST['hacker_dob'];
$hackmobile = $_POST['hacker_mobile'];
$hackemail = $_POST['hacker_email'];
$hackskill = $_POST['hacker_skill'];
$hackstatus = $_POST['hacker_status'];
$query = "update hacker_info set hack_name='$hackname',hack_dob='$hackdob',hack_mobile='$hackmobile',hack_status='$hackstatus',hack_skills='$hackskill' where hack_id='$hackid' ";
$res=mysqli_query($conn,$query);
if($res)
{
    echo"updated succesfully";

}
else{
    echo"not updated";
}
?>