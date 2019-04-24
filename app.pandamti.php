<!DOCTYPE html> 
<html>    
<head>      
 <title>Homepage</title>   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">       <!-- Bootstrap -->     
     <link href="css/bootstrap.min.css" rel="stylesheet"> 




          <script type="text/javascript">
          function tree(){
          alert ("Do you want to add the tree");
       }
         </script>
    </head> 
    <body>  

<section id="menu" style="width:100%; height: 100px">
  <div class="container-fluid">
    <nav class="navbar navbar-default ">
      <ul class="nav nav-pills justify-content-end">
        <li><a class="btn btn-primary nav-btn" href="#add">Add Tree Species</a></li>&nbsp
        <li><a class="btn btn-primary nav-btn" href="#"> Update Tree Species</a></li>&nbsp
        <li><a class="btn btn-primary nav-btn" href="viewall.php">View All Tree Species</a></li>
      </ul>
    </nav>
  </div>
</section>


<section id="add">

        <div class="container-fluid">
        <form class="form-inline" role="form" method="POST" action="pandamti_conn.php">
          <fieldset>
       <legend>Add tree species</legend>
       <div class="form-group">
           <label for="cname">Common Name</label><br>
           <input type="text" class="form-control" name="cname" value="" required>
       </div>
        <div class="form-group">
           <label for="sname">Scientific Name</label><br>
           <input type="text" class="form-control" name="sname" value="" required>
       </div>
        <div class="form-group">
           <label for="mgmt">Management</label><br>
           <input type="text" class="form-control" name="mgmt" value="" required>
       </div>
        <div class="form-group">
           <label for="enduse">End Use</label><br>
           <input type="text" class="form-control" name="enduse" value="" required>
       </div>
        <div class="form-group">
           <label for="rotation">Rotation</label><br>
           <input type="text" class="form-control" name="rotation" value="" required>
       </div>
        <div class="form-group">
           <label for="nurseries">Nurseries</label><br>
           <select name="nurseries" required>
             <option>KFS Ecosystem Conservators</option>
             <option>KEFRI Centers</option>
           </select>
       </div>
        <div class="form-group">
           <label for="altitude">Altitude</label><br>
           <input type="text" class="form-control" name="altitude" value="" required>
       </div>
        <div class="form-group">
           <label for="soil">Soil Type</label><br>
           <input type="text" class="form-control" name="soil" value="" required>
       </div>
        <div class="form-group">
           <label for="zone">Eco-Zone</label><br>
           <input type="text" class="form-control" name="zone" value="" required>
       </div>
        <div class="form-group">
           <label for="asr">Average Seasonal Rainfall</label><br>
           <input type="text" class="form-control" name="asr" value="" required>
       </div>
        <div class="form-group">
           <label for="forecast">Forecast</label><br>
           <input type="text" class="form-control" name="forecast" value="" required>
       </div>
        <div class="form-group">
           <label for="image">Tree Image</label><br>
           <input type="file" name="image" value="" >
       </div>
        <div class="form-group">
           <label for="htp">How To Plant</label><br>
          <textarea placeholder="enter how to plant here" class="form-control" cols="10" rows="2" name="htp" required></textarea>
       </div>
       <button class="btn btn-primary form-btn" onclick="tree()">Add Tree</button>
          </fieldset>
     </form> 
      </div>
  </section>    
       <script src="https://code.jquery.com/jquery.js"></script>          
      <script src="js/bootstrap.min.js"></script>   
       </body>
       </html>  