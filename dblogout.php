<?php

if(isset($_COOKIE['user']))
{
    setcookie("user","",time()-3600,"/");
    echo "logout success";
}
else
{
    echo "error";
}
header("Location: foodlogin.html");
?>