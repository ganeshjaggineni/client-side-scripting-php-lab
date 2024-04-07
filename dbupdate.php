<?php
include("db.php");
$uname = $_POST['un'];
$udob = $_POST['updob'];
$ugender = $_POST['upgender'];
$uemail = $_POST['upemail'];
$umobile = $_POST['upmobile'];
$ufavfood = $_POST['upfavfood'];
$uaddress = $_POST['upaddress'];

echo $uname;
echo $udob;
echo $ugender;
echo $uemail;
echo $umobile;
echo $ufavfood;
echo $uaddress;
// Updated query with variables properly concatenated
$query = "UPDATE foodiesregistrations SET username='$uname', userdob='$udob', usergender='$ugender', useremail='$uemail', usermobile='$umobile', userfavfood='$ufavfood', useraddress='$uaddress' WHERE username='$uname'";

$result = mysqli_query($conn, $query);

if ($result) {
    // Check if any rows were affected by the update
    if (mysqli_affected_rows($conn) > 0) {
        echo "Record updated successfully";
    } else {
        echo "No records were updated";
    }
} else {
    // Handle SQL error
    echo "Error: " . mysqli_error($conn);
}
?>
