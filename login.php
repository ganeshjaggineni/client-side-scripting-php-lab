<?php
include("db.php");
include("links.html");
$count = 0;
$un = $_POST['utf'];
$up = $_POST['ptf'];
$sql = "select * from student_details";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
  if($un == $row["studregno"] && $up == $row["studpwd"])
    {
	$count++;
	break;
    }
}
if($count!=0)
{
setcookie("user",$un,time()+3600,"/","",0);
}
else
{
?>
<script>
window.alert("Invalid User Name & User Password");
</script>

<?php
include("login.html");
}

?>