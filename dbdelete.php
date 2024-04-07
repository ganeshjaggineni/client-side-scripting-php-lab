<?php
include('db.php');
$del_user = $_POST['foodiename'];

// Check if 'foodiename' is set in $_POST
if(isset($_POST['foodiename'])) {
    // Sanitize the input
    echo $_POST['foodiename'];


    // Build the delete query
    $query = "DELETE FROM foodiesregistrations WHERE username='$del_user'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the deletion was successful
    if ($result) {
        echo "Deleted successfully";
    } else {
        echo "Failed to delete: " . mysqli_error($conn);
    }
} else {
    echo "Username not provided";
}
?>
