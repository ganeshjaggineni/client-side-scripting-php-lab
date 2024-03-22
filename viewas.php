<?php
include("db.php");
include("links.html");
$rno=$_GET["stureg"];
$sql="SELECT * from student_details WHERE studregno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>STUDENT(S) INFORMATION</h1>
<table border="5">
<tr>
<th>Student Register Number :</th>
<th>Student Name :</th>
<th>Student Gender :</th>
<th>Student DOB :</th>
<th>Student Course:</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['studregno']; ?></td>
<td><?php echo $row['studname']; ?></td>
<td><?php echo $row['studgender']; ?></td>
<td><?php echo $row['studdob']; ?></td>
<td><?php echo $row['studcourse']; ?></td>
</tr>
<?php
}
?>
</table>
</center>