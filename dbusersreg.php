<?php
include("db.php");

$uname = $_POST['fusername'];
$udob = $_POST['fuserdob'];
$ugender = $_POST['fusergender'];
$uemail = $_POST['fuseremail'];
$umob = $_POST['fusermob'];
$ufav = $_POST['fuserfav'];
$uaddress = $_POST['fuseraddress'];

// Enable MySQLi error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Establish a connection to the MySQL database


    // SQL query
    $query = "INSERT INTO foodiesregistrations VALUES ('$uname','$udob','$ugender','$uemail','$umob','$ufav','$uaddress')";

    // Execute the query
    if(mysqli_query($conn, $query)) {
        echo "Record inserted successfully";
    } else {
        throw new Exception(mysqli_error($conn));
    }
} catch (Exception $e) {
    // Handle MySQL errors
    echo "Error: " . $e->getMessage();
} finally {
    // Close the connection
    if ($conn) {
        mysqli_close($conn);
    }
}
include("foodusersreg.html");
?>
