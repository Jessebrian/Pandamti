<?php
require("connection.php");

$query="SELECT * FROM sitematch;";

$result=mysqli_query($conn,$query);

$post=mysqli_fetch_all($result,MYSQLI_ASSOC);
//var_dump($post);

mysqli_free_result($result);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>
	<section id="menu" style="width:100%; height: 100px">
  <div class="container-fluid">
    <nav class="navbar navbar-default ">
      <ul class="nav nav-pills justify-content-end">
        <li><a href="app.pandamti.php">Add Tree Species</a></li>
        <li><a href="#"> Update Tree Species</a></li>
        <li><a href="viewall.php">View All Tree Species</a></li>
      </ul>
    </nav>
  </div>
</section>


    <h1> Tree Species</h1>
    <?php foreach ($post as $post):?>
    		<h3> Tree Name:<?php echo $post['commonname']; ?><small>Scientific Name: <?php echo $post['scientificname']; ?></small></h3>
             <table class="table">
             	<thead>
             	<th>Management</th>
             	<th>Enduse</th>
             	<th>Rotation</th>
             	<th>Nursery</th>
             	<th>Altitude</th>
             	<th>Soiltype</th>
             	<th>Ecozone</th>
             	<th>Average Seasonal<br>rainfall</th>
             	<th>Forecast</th>
             	<th>Tree Image</th>
             	<th>How to Plant</th>
             	</thead>
             	<tbody>
             		<tr>
             		<td><?php echo $post['management']?></td>
             		<td><?php echo $post['enduse']?></td>
             		<td><?php echo $post['rotation']?></td>
             		<td><?php echo $post['nurseries']?></td>
             		<td><?php echo $post['altitude']?></td>
             		<td><?php echo $post['soiltype']?></td>
             		<td><?php echo $post['ecozone']?></td>
             		<td><?php echo $post['seasonalrainfall']?></td>
             		<td><?php echo $post['forecast']?></td>
             		<td><?php echo $post['image']?></td>
             		<td><?php echo $post['howtoplant']?></td> 
             		</tr>            	
             	</tbody>
             </table>
    		<!--<a class="btn btn-primary" href="post.php?id=<php echo $post['id'];">-->

    		<?php endforeach?>
    	
</body>
</html>