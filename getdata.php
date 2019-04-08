<?php
require_once('dbHelper.php');

$us=$_POST['key'];

$result=array();
$result['data']=array();
$sql="SELECT * from add_dept where username='$us'";
$response=mysqli_query($con,$sql);

if(mysqli_num_rows($response)>0)
{
	while($row=mysqli_fetch_assoc($response)){
 	$output[]=$row;
 }
print(json_encode(array("viewdata"=>$output)));
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
