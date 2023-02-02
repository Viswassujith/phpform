<?php

$n=$_POST['stname'];
$c=$_POST['stclass'];
$con=mysqli_connect("localhost","root","","12thstd");
$sql="INSERT INTO studentsdetails(StudentName,StudentClass) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"USER DETAILS ADDEd SUCCESSFULLY";
}
else
{
 echo"STUDENTS DETAILS NOT ADDED";
}



?>