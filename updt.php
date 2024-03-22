<?php 
include("links.html");
include("db.php");
$rn=$_GET["rtf"];
$un=$_GET["ntf"];
$ug=$_GET["gtf"];
$ud=$_GET["dtf"];
$uc=$_GET["ctf"];
$sql = "UPDATE student_details SET studregno = '$rn',studname='$un',studgender='$ug',studdob='$ud',studcourse='$uc' WHERE studregno='$rn'";

if(mysqli_query($conn,$sql))
{
echo $rn."<h1>updated succesfully</h1>";
}
else
{
echo "<h1>".$rn."Not Updated Successfully</h1>";
}
?>