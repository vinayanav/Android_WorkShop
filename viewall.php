<?php
require_once('dbHelper.php');
$sql="SELECT username from add_dept";
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
