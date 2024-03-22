<?php
include("db.php");
$hack_id = $_POST['hacker_id'];
$query = "Select * from hacker_info where hack_id='$hack_id' ";
$res = mysqli_query($conn,$query);
?>
<center>
    <table border='10'>
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
    <td><?php echo $row['hack_id']; ?></td>
    <td><?php echo $row['hack_name']; ?></td>
    <td><?php echo $row['hack_dob']; ?></td>
    <td><?php echo $row['hack_mobile']; ?></td>
    <td><?php echo $row['hack_email']; ?></td>
    <td><?php echo $row['hack_skills']; ?></td>
    <td><?php echo $row['hack_status']; ?></td>
</tr>
<?php

}

?>

</table>
</center>


