<?php 
require_once('connection.php');

$common=$scientific=$manage=$end=$rotation=$nurseries=$altitude=$soil=$zone=$asr=$forecast=$image=$htp="";

$common=$_POST['cname'];
$scientific=$_POST['sname'];
$manage=$_POST['mgmt'];
$end=$_POST['enduse'];
$rotation=$_POST['rotation'];
$nurseries=$_POST['nurseries'];
$altitude=$_POST['altitude'];
$soil=$_POST['soil'];
$zone=$_POST['zone'];
$asr=$_POST['asr'];
$forecast=$_POST['forecast'];
$image=$_POST['image'];
$htp=$_POST['htp'];

$sql="INSERT INTO sitematch(commonname,scientificname,management,enduse,rotation,nurseries,altitude,soiltype,ecozone,seasonalrainfall,forecast,image,howtoplant) VALUES('$common','$scientific','$manage','$end','$rotation','$nurseries','$altitude','$soil','$zone','$asr','$forecast','$image','$htp');";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Tree species added successfully. <a href='app.pandamti.php'>Home</a>";
}
?>