<?php
include("db.php");
$uname = $_POST['fusername'];
$query = "SELECT * FROM foodiesregistrations where username='$uname'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}
?>
<center>
    <table border="5">
        <form action="dbdelete.php" method="get">
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
                <td>
                    <form action="dbdelete.php" method="post">
                        <input type="hidden" name="foodiename" value="<?php echo $row['username'] ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>

            </tr>
        <?php
        }
        ?>
        </form>
    </table>
</center>
