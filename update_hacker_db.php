<!-- <?php
include("db.php");
$hack_id = $_POST['hacker_id'];
$query = "Select * from hacker_info where hack_id='$hack_id' ";
$res = mysqli_query($conn,$query);
?>
<center>
    <table border='15'>
        <tr>
        <th>Hacker Id </th>
        <th>Hacker Name </th>
        <th>Hacker Dob </th>
        <th>Hacker Mobile</th>
        <th>Hacker Email </th>
        <th>Hacker Skills </th>
        <th>Hacker Status </th>
        </tr>
<tr>
<?php
if($row=mysqli_fetch_assoc($res))
{
 ?>
    <td><input type="text" value='<?php echo $row['hack_id']; ?>'></td>
    <td><input type="text" value='<?php echo $row['hack_name']; ?>'></td>
    <td><input type=dob value='<?php echo $row['hack_dob']; ?>'>  </td>
    <td><input type="tel" value='<?php echo $row['hack_mobile']; ?>'></td>
    <td><?php echo $row['hack_email']; ?></td>
    <td><?php echo $row['hack_skills']; ?></td>
    <td><?php echo $row['hack_status']; ?></td>
</tr>
<?php

}

?>

</table>
</center>

 -->
 <?php
include("db.php");
$hack_id = $_POST['hacker_id'];
$query = "SELECT * FROM hacker_info WHERE hack_id='$hack_id'";
$res = mysqli_query($conn, $query);
?>
<center>
    <form action="update.php" method="post">
        <table border='15'>
            <tr>
                <th>Hacker Id</th>
                <th>Hacker Name</th>
                <th>Hacker Dob</th>
                <th>Hacker Mobile</th>
                <th>Hacker Email</th>
                <th>Hacker Skills</th>
                <th>Hacker Status</th>
            </tr>
            <?php
            if ($row = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><input type="text" name="hacker_id" value="<?php echo $row['hack_id']; ?>" readonly></td>
                    <!-- Displaying the hacker ID as a read-only field -->
                    <td><input type="text" name="hacker_name" value="<?php echo $row['hack_name']; ?>"></td>
                    <td><input type="date" name="hacker_dob" value="<?php echo $row['hack_dob']; ?>"></td>
                    <!-- Using input type="date" for the date of birth field -->
                    <td><input type="tel" name="hacker_mobile" value="<?php echo $row['hack_mobile']; ?>"></td>
                    <!-- Using input type="tel" for the mobile number -->
                    <td><input type="email" name="hacker_email" value="<?php echo $row['hack_email']; ?>"></td>
                    <!-- Using input type="email" for the email field -->
                    <td><input type="text" name="hacker_skill" value="<?php echo $row['hack_skills']; ?>"></td>
                    <td><input type="text" name="hacker_status" value="<?php echo $row['hack_status']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="7"><input type="submit" value="Update"></td>
                    <!-- Submit button for updating the record -->
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</center>

