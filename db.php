<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "experiment";

$conn = mysqli_connect($servername,$username,$pwd,$dbname);
if(!$conn)
{
    echo "cant connect to database :".mysqli_connect_error();

}
else
{    echo "database connected";
}

?>