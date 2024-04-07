<?php
include("db.php");
$uname = $_POST['foodieusername'];
$query = "SELECT * FROM foodiesregistrations where username='$uname'";
$result = mysqli_query($conn,$query);

?>
<center>
<form method="post" action="dbupdate.php">
    <table border="5">
        <tr>
    <th>User Name: </th>
    <th>User Dob: </th>
    <th>User Gender: </th>
    <th>User Email </th>
    <th>User Mobile </th>
    <th>User FavFood </th>
    <th>User Address </th>
</tr>
<tr>
    <?php
        while($row=mysqli_fetch_assoc($result))
        {
            // echo $row['username'];
            ?>
           <td><input type="text" value="<?php echo $row['username'] ?>" disabled>  </td>
           <td> <input type="text" value="<?php echo  $row['userdob'] ?>" name="updob">  </td>

           <td> <input type="text" value="<?php  echo $row['usergender'] ?>" name="upgender">  </td>

           <td> <input type="text" value="<?php echo  $row['useremail'] ?>" name="upemail">  </td>

           <td> <input type="text" value="<?php  echo $row['usermobile'] ?>" name="upmobile">  </td>
           <td> <input type="text" value="<?php  echo $row['userfavfood'] ?>" name="upfavfood">  </td>
           <td> <input type="text" value="<?php  echo $row['useraddress'] ?>" name="upaddress">  </td>

           <input type="hidden" value="<?php echo $row['username']; ?>" name="un">  </td>

           <td><input type="submit" value="update"></td>
        </tr>
    <?php
        }
    ?>
</table>
</form>

</center>