<?php
include("db.php");

$query = "SELECT * FROM foodiesregistrations";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}
?>
<center>
    <table border="5">
        <tr>
            <th>User Name</th>
            <th>User dob</th>
            <th>User gender</th>
            <th>User email</th>
            <th>User Mobile</th>
            <th>User favfood</th>
            <th>User address</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['userdob'] ?></td>
                <td><?php echo $row['usergender'] ?></td>
                <td><?php echo $row['useremail'] ?></td>
                <td><?php echo $row['usermobile'] ?></td>
                <td><?php echo $row['userfavfood'] ?></td>
                <td><?php echo $row['useraddress'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</center>
