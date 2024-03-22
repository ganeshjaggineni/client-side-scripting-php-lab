<?php
$server_name = "localhost";
$server_user = "root";
$server_pwd = "";
$db_name = "hacker";

$conn=mysqli_connect($server_name,$server_user,$server_pwd,$db_name);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"data based connected :".$db_name;
}
?>