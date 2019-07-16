<?php
$conn=mysqli_connect("localhost",'root','','auction');
$nam=mysqli_escape_string($conn,$_POST['nam']);
$qry="SELECT * from managers WHERE name='$nam'";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	// $left=$row['amount_left'];	
	// $used=$row['amount_used'];
	$noplayers=$row['tnop'];
	$mbno=$row['mobile_no'];
	$team=$row['team'];
	$team_name=$row['team_name'];
$qry="SELECT * from $team ORDER BY Player";
$result=mysqli_query($conn,$qry);
$i=1;
$playerslist='';
while($row=mysqli_fetch_assoc($result))
{   
	$players=$row['Player'];
	$playerslist=$playerslist.$i."-".$players."<br/>";
	$i++;
}
	echo '{"nam":"'.$name.'","noplayers":"'.$noplayers.'","mbno":"'.$mbno.'","team":"'.$team.'","playerslist":"'.$playerslist.'","team_name":"'.$team_name.'"}';
?>