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
        <li><a class="btn btn-primary nav-btn" href="app.pandamti.php">Add Tree Species</a></li>&nbsp
        <li><a class="btn btn-primary nav-btn" href="#"> Update Tree Species</a></li>&nbsp
        <li><a class="btn btn-primary nav-btn" href="viewall.php">View All Tree Species</a></li>
      </ul>
      <ul class="nav justify-content-end">
      	<li>
      		<form role="form" class="form-inline">
      			<div class="form-group">
      				<input type="text" name="search" class="form-control" value="" placeholder="Search Here">
      			</div>
      		</form>
      </ul>
    </nav>
  </div>
</section>


    <h1> Tree Species</h1>
    <?php foreach ($post as $post):?>
    		<!--<h3> Tree Name:<?php echo $post['commonname']; ?><small>Scientific Name: <?php echo $post['scientificname']; ?></small></h3>-->
             <table class="table table-striped table-bordered">
             	<thead>
              <th>Common Name</th>
              <th>Scientific Name</th>
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
                <td><?php echo $post['commonname']?></td>
                <td><?php echo $post['scientificname']?></td>
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


 <!-- <footer>
    <div class="container-fluid">
      <h6 style="tooltip:MARK,LUCY,IRENE,BRIAN,ANTHONY;">developed by ICT webteam</h6>
    </div>
  </footer> -->     
    	
</body>
</html>