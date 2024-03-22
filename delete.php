<?php
include("db.php");
include("links.html");
$rno=$_GET["stureg"];
$sql="SELECT * from student_details WHERE studregno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>UPDATE STUDENT(S) INFORMATION</h1>
<form action="del.php" name="updt" method="get">
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
<td><?php echo $row['studname']; ?></td>
<td><?php echo $row['studgender']; ?> </td>
<td><?php echo $row['studdob']; ?> </td>
<td><?php echo $row['studcourse']; ?> </td>
<td><input type="submit" value="Delete" </td>
</tr>
<?php
}
?>
</table>
</center>