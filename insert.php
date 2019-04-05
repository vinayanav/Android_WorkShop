<?php
require_once('dbHelper.php');
$dept=$_POST['deptname'];
$us=$_POST['username'];
$ps=$_POST['password'];
$sql="INSERT INTO add_dept(dept_name,username,password)VALUES('$dept','$us','$ps')";
$res=mysqli_query($con,$sql);

if($res>0){
	echo "sucess";
}
else{
	echo "failed";
}
?>