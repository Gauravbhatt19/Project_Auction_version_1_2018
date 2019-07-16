<?php
$flag=1;
$conn=mysqli_connect("localhost",'root','','auction');
// if(!$conn)
// {
// 	$flag=0;
//}
$name=$_POST['nam'];
$mngr=$_POST['mngr'];
$price=$_POST['price'];
$qry="SELECT * from managers WHERE team_name='{$mngr}'";
$result=mysqli_query($conn,$qry);
// if(!$result)
// {
// 	$flag=0;
// }
$teamq=mysqli_fetch_assoc($result);
$team=$teamq['team'];
$tnop=$teamq['tnop'];
 echo $amount_used."<br/>".$amount_left."<br/>".$tnop."<br/>".$price."<br/>";
$qry="SELECT * from players WHERE name='{$name}'";
$result=mysqli_query($conn,$qry);
// if(!$result)
// {
// 	$flag=0;
// }
$plyr=mysqli_fetch_assoc($result);
$plyrCode=$plyr['id'];
$plyrname=$plyr['name'];
$qry="INSERT INTO {$team} (PLayerCode,Player) VALUES ('{$plyrCode}','{$plyrname}')";
$result=mysqli_query($conn,$qry);
$updt_amount_used=$amount_used+$price;
$updt_amount_left=$amount_left-$price;
$updt_tnop=$tnop+1;
 echo $updt_amount_used."<br/>".$updt_amount_left."<br/>".$updt_tnop."<br/>";
$qry="UPDATE managers SET amount_used='{$updt_amount_used}',amount_left='{$updt_amount_left}',tnop='{$updt_tnop}'  WHERE team_name='{$mngr}'";
$result=mysqli_query($conn,$qry);
if(!$result)
{
		echo "Errroororor";
		echo mysqli_error($conn);
}
// if(!$result)
// {
// 	$flag=0;
// }
$qry="DELETE FROM players WHERE name='{$name}'";
$result=mysqli_query($conn,$qry);
// if(!$result)
// {
// 	$flag=0;
// }
// if($flag==1)
// {
// echo '{"stts":"1"}';
// }
// else
// {

// echo '{"stts":"0"}';

// }
echo '{"nam":"'.$name.'","mngr":"'.$mngr.'","price":"'.$price.'"}';
?>
