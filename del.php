<?php 
include("links.html");
include("db.php");
$rn=$_GET["rtf"];

$sql="delete from student_details WHERE studregno='$rn'";
if(mysqli_query($conn,$sql))
{
echo "<h1>".$rn."Delted succesfully...</h1>";
}
else
{
echo "<h1>".$rn."Not Delted...</h1>";
}