<?php
$conn=mysqli_connect("localhost",'root','','auction');
if(isset($_POST['todo']))
{
	$any=rand(1,60);
	$qry="SELECT * from players WHERE id='$any'";
}
else{
	$nam=mysqli_escape_string($conn,$_POST['nam']);
$qry="SELECT * from players WHERE name='$nam'";
}

$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$cat=$row['category'];
	$mbno=$row['mobile_no']	;
	$base_price=$row['base_price'];
	$year=$row['years'];
	echo '{"nam":"'.$name.'","mbno":"'.$mbno.'","base":"'.$base_price.'","cat":"'.$cat.'","year":"'.$year.'"}';
?>