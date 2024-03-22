<?php
include("db.php");
include("links.html");
$rno=$_GET["stureg"];
$sql="SELECT * from student_details WHERE studregno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>UPDATE STUDENT(S) INFORMATION</h1>
<form action="updt.php" name="updt" method="get">
<table border="5">
<tr>
<th>Student Register Number :</th>
<th>Student Name :</th>
<th>Student Gender :</th>
<th>Student DOB :</th>
<th>Student Course:</th>
<th>Operation </th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><input type="text" value=<?php echo $row['studregno']; ?> name="rtf" /></td>
<td><input type="text" value=<?php echo $row['studname']; ?> name="ntf" /></td>
<td><input type="text" value=<?php echo $row['studgender']; ?> name="gtf" /></td>
<td><input type="text" value=<?php echo $row['studdob']; ?> name="dtf" /></td>
<td><input type="text" value=<?php echo $row['studcourse']; ?> name="ctf" / ></td>
<td><input type="submit" value="Update" name="update" /></td>
</tr>
<?php
}
?>
</table>
</center>