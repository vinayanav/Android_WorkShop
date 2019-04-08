<?php
require_once('dbHelper.php');

$us=$_POST['username'];
$ps=$_POST['password'];
$result=array();
$result['login']=array();
$sql="SELECT * from add_dept where username='$us' and password='$ps'";
$response=mysqli_query($con,$sql);

if(mysqli_num_rows($response)>0)
{
	$row=mysqli_fetch_array($response);
	$index['uname']=$row['username'];
	$index['pword']=$row['password'];
	array_push($result['login'],$index);
	$result['sucess']="1";
	echo json_encode($result);
	mysqli_close($con);
}
else
{
	$result['sucess']="0";
	$result['message']="error";
	echo json_encode($result);
	mysqli_close($con);
}
?>
