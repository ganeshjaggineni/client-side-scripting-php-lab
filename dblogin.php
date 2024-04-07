<?php
include("db.php");
$uname = $_POST['fusername'];
$uemail = $_POST['fuseremail'];
$query = "select * from foodiesregistrations";
$result = mysqli_query($conn,$query);
$count = 0;
while($row=mysqli_fetch_assoc($result))
{
    if(($row['username']==$uname) && ($row['useremail']==$uemail))
    {
        $count++;
        break;
    }
}
if($count != 0)
{
    setcookie("user","$uname",time()+3600,"/");
    echo "login success";
}
else {
    echo "Invalid username or email";

}
include("foodlogin.html");
?>