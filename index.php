<html>
<head>
	<meta charset="UTF-8">
	<title>Auction</title>
	<style type="text/css">
	body
	{
		font-family:Arial; 
		background:url(background.jpg) no-repeat; 
		background-size:100% 100%;
		background-attachment:fixed;   
	}
		.hdr
		{
			background-color:#000;
			margin:-8px;
			color:#fff;
			padding:10px;
			font-weight:bolder;  

		}
	.nv a
	{ 
	transition:0.5s; 
	background-color:#999;
	padding:10px;
	text-decoration:none;
	color:#fff;   
	float:right; 
	}
		.nv a:hover
	{	transition:0.5s; 
	background-color:#000;
	color:#fff;   
	}
	.main
	{
		display:grid;
		grid-template-columns:repeat(auto-fit,minmax(300px,1fr));  
		background-color:rgba(10,10,10,0.5);
		color:#fff;   
		padding:30px 
	}
	.btn
	{
		color:rgba(60,240,230,1);
		font-weight:bolder;
		font-size:1.2rem;  
		text-decoration:none; 
	}
	.box
	{
		position:fixed;
		top:50px;
		left:100px;
		background-color:rgba(50,50,50,1);
		color:#fff;
		padding:30px;    
		width:80%; 
	}
	.cls
	{
		user-select:none;
		cursor:pointer;
		float:right;   
	}
	.hgt
	{
		color:rgba(20,255,15,1);
	}
	</style>
	<script type="text/javascript">
		function disp(nam)
		{				document.getElementById("amtusd").style.display="none";
			document.getElementById('ply').style.display="none";	
			document.getElementById('ply1').style.display="none";			
			document.getElementById('name').style.display="none";
			document.getElementById('used').style.display="none";
			document.getElementById('left').style.display="none";
			document.getElementById('list').style.display="none";			
			 document.getElementById("amtlft").innerHTML="";	
			//  document.getElementById("amtusd").innerHTML="";	
			// document.getElementById("tnop").innerHTML="Total No. of Players :";	
			document.getElementById("plylst").innerHTML="Players List :-";	
			document.getElementById("box1").style.display="block";			
			document.getElementById("teamName").innerHTML="Team Name:";
			var xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4&&this.status==200){
			var obj=JSON.parse(this.responseText);
			document.getElementById('name').innerHTML=obj.nam;
			 // document.getElementById('left').innerHTML=obj.left;		
			 // // document.getElementById('used').innerHTML=obj.used;	
			 // document.getElementById('noofplayers').innerHTML=obj.noplayers;	
			 document.getElementById('mbno').innerHTML=obj.mbno;	
			 document.getElementById('team').innerHTML=obj.team_name;	
			 document.getElementById('mbno').style.display="inline";	
			 document.getElementById('team').style.display="inline";
			document.getElementById('list').innerHTML=obj.playerslist;	
			document.getElementById('name').style.display="inline";
			// document.getElementById('left').style.display="inline";
			// document.getElementById('used').style.display="inline";
			document.getElementById('noofplayers').style.display="inline";
			document.getElementById('list').style.display="inline";
		}
	};
	xhttp.open("POST","fetch.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var str_send="&nam="+nam.innerHTML;
	xhttp.send(str_send);
		}		
		function disp1(xyz){
				document.getElementById("amtusd").style.display="inline";
			document.getElementById('ply').style.display="inline";	
			document.getElementById('ply1').style.display="block";	
			document.getElementById('mbno').style.display="none";	
			document.getElementById('team').style.display="none";
			document.getElementById('left').style.display="none";
			document.getElementById('used').style.display="none";
			document.getElementById('noofplayers').style.display="none";
			document.getElementById('list').style.display="none";
			document.getElementById("amtlft").innerHTML="Category :";	
			document.getElementById("teamName").innerHTML="Base Price:";
			document.getElementById("amtusd").innerHTML="Year:";	
			document.getElementById("tnop").innerHTML="";	
			document.getElementById("plylst").innerHTML="";	
			document.getElementById("box1").style.display="block";	
			var xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4&&this.status==200){
			var obj=JSON.parse(this.responseText);
			document.getElementById('name').innerHTML=obj.nam;
			document.getElementById('used').innerHTML=obj.year;
			document.getElementById('left').innerHTML=obj.cat;
			document.getElementById('mbno').innerHTML=obj.mbno;	
			document.getElementById('team').innerHTML=obj.base;	
			document.getElementById('chg').innerHTML=obj.base;
			document.getElementById('team').style.display="inline";
			document.getElementById('mbno').style.display="inline";
			document.getElementById('name').style.display="inline";
			document.getElementById('used').style.display="inline";
			document.getElementById('left').style.display="inline";
		}
	};
	xhttp.open("POST","fetch1.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var str_send="&nam="+xyz.innerHTML;
	xhttp.send(str_send);
		}
		function hid(itm)
		{
			document.getElementById(itm).style.display="none";
		}
		function mint(VID)
		{
			var VID=document.getElementById(VID);
			var updt=VID.innerHTML;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
		updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;updt--;
			VID.innerHTML=updt;
		}
		function add(VID)
		{
			var VID=document.getElementById(VID);
			var updt=VID.innerHTML;
			updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;updt++;

			VID.innerHTML=updt;
		}
		function addp()
		{	if (confirm("Are you sure this player is sold.?")) {
			var xhttp= new XMLHttpRequest();
			 var mngr=document.getElementById('team_name').value;
			 var price=document.getElementById('chg').innerHTML;
			 var name=document.getElementById('name').innerHTML;
				var xhttp= new XMLHttpRequest();
	 		xhttp.onreadystatechange=function(){
	 	if(this.readyState==4&&this.status==200){
	 			var obj=JSON.parse(this.responseText);
				// alert(obj.nam+obj.mngr+obj.price);
	 		}
	 };
	 xhttp.open("POST","addp.php",true);
	 xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	 var str_send="&nam="+name+"&mngr="+mngr+"&price"+price;
	 xhttp.send(str_send);
	 }
		}
		function nextplayer()
		{
				document.getElementById('ply').style.display="inline";	
			document.getElementById('ply1').style.display="block";	
			document.getElementById('mbno').style.display="none";	
			document.getElementById('team').style.display="none";
			document.getElementById('left').style.display="none";
			document.getElementById('used').style.display="none";
			document.getElementById('noofplayers').style.display="none";
			document.getElementById('list').style.display="none";
			document.getElementById("amtlft").innerHTML="Category :";	
			document.getElementById("teamName").innerHTML="Base Price:";
			document.getElementById("amtusd").innerHTML="Year:";	
			document.getElementById("tnop").innerHTML="";	
			document.getElementById("plylst").innerHTML="";	
			document.getElementById("box1").style.display="block";	
			var xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4&&this.status==200){
			var obj=JSON.parse(this.responseText);
			document.getElementById('name').innerHTML=obj.nam;
			document.getElementById('used').innerHTML=obj.year;
			document.getElementById('left').innerHTML=obj.cat;
			document.getElementById('mbno').innerHTML=obj.mbno;	
			document.getElementById('team').innerHTML=obj.base;	
			document.getElementById('chg').innerHTML=obj.base;
			document.getElementById('team').style.display="inline";
			document.getElementById('mbno').style.display="inline";
			document.getElementById('name').style.display="inline";
			document.getElementById('used').style.display="inline";
			document.getElementById('left').style.display="inline";
		}
	};
	xhttp.open("POST","fetch1.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var str_send="&todo=random";
	xhttp.send(str_send);

		}
	</script>
</head>
<body>
	<header>
		<div class="hdr"><marquee>Cricket Tournament 2K18 Auction</marquee>
		</div>	
		<nav class="nv">
			<a href="/index.php">Refresh</a>
			<a href="javascript:void(0)" onclick="nextplayer()" style="position:fixed;">Next Player</a>
		</nav></header>
		<div class="main">
		<div class="left">
			<h1>List of Managers</h1>
			<ol>
				<?php
				$conn=mysqli_connect('localhost','root','','auction');
		$qry="SELECT * FROM managers ORDER BY name";
		$result=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($result))
		{    
			echo "<li><a href='javascript:void(0)' class='btn' onclick='disp(this)'>".$row['name']."</a></li>";
		}
				?>
			</ol>
		</div>
		<div>
			<h1>List of Unsold Players</h1>
			<ol>
				<?php
				$conn=mysqli_connect('localhost','root','','auction');
		$qry="SELECT * FROM players ORDER BY name";
		$result=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($result))
		{
	echo "<li><a href='javascript:void(0)' class='btn' onclick='disp1(this)'>".$row['name']."</a></li>";
		}
				?>
			</ol>
		</div>
	</div>
	<div class="box" id="box1" hidden>
		<span class="cls" onclick="hid('box1')">Close / Unsold</span>
	
	<div>	<span>Name :</span>
		<span class="hgt" id="name"></span>
</div>
<div>

		<span>Mobile No.:</span>
		<span class="hgt" id="mbno" ></span>
</div>
<div>

		<span  id="teamName"></span>
		<span class="hgt" id="team" ></span>
</div>
	<div>
		<span id=/"amtlft"></span>
		<span class="hgt" id="left" ></span>
	
</div>
	<div>
		<span  id="amtusd"></span>
		<span class="hgt" id="used" ></span>
	
</div>
	<div>
	
		<span  id="tnop"></span>
		<span class="hgt" id="noofplayers" ></span>
		
</div>
	<div>

		<span  id="plylst"></span>
		<span class="hgt" id="list" ></span>
</div>
<div id="ply" >
	<label>Price :</label>
	<input type="button" value="-" onclick="mint('chg')">
	<span id="chg"  class="hgt">100</span> 
	<input type="button" value="+" onclick="add('chg')">
	</div>
	<div id="ply1" hidden>
	<label>Sold to:</label>
	<span>
		<select name="team_name" id="team_name">
			<?php 
				$conn=mysqli_connect('localhost','root','','auction');
				$qry="SELECT * FROM managers ORDER BY name";
				$result=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($result))
		{    $plyrr=$row['team_name'];
			echo "<option value='$plyrr'>".$plyrr."</option>";
		}
			?>
		</select>
	</span>
	<input type="button" value="Confirm" onclick="addp()">
	</div>

	</div>
	<footer></footer>
</body>
</html>