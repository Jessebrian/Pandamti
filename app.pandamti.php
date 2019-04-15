<!DOCTYPE html> 
<html>    
<head>      
 <title>Homepage</title>   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">       <!-- Bootstrap -->     
     <link href="css/bootstrap.min.css" rel="stylesheet"> 
    </head> 
    <body>      <div class="container-fluid">
        <form class="form-inline" role="form">
          <fieldset>
       <legend>Add tree</legend>
       <div class="form-group">
           <label for="cname">Common Name</label><br>
           <input type="text" class="form-control" name="cname" value="" >
       </div>
        <div class="form-group">
           <label for="sname">Scientific Name</label><br>
           <input type="text" class="form-control" name="sname" value="" >
       </div>
        <div class="form-group">
           <label for="mgmt">Management</label><br>
           <input type="text" class="form-control" name="mgmt" value="" >
       </div>
        <div class="form-group">
           <label for="enduse">End Use</label><br>
           <input type="text" class="form-control" name="enduse" value="" >
       </div>
        <div class="form-group">
           <label for="rotation">Rotation</label><br>
           <input type="text" class="form-control" name="rotation" value="" >
       </div>
        <div class="form-group">
           <label for="nurseries">Nurseries</label><br>
           <input type="text" class="form-control" name="nurseries" value="" >
       </div>
        <div class="form-group">
           <label for="altitude">Altitude</label><br>
           <input type="text" class="form-control" name="altitude" value="" >
       </div>
        <div class="form-group">
           <label for="soil">Soil Type</label><br>
           <input type="text" class="form-control" name="soil" value="" >
       </div>
        <div class="form-group">
           <label for="zone">Eco-Zone</label><br>
           <input type="text" class="form-control" name="zone" value="" >
       </div>
        <div class="form-group">
           <label for="asr">Average Seasonal Rainfall</label><br>
           <input type="text" class="form-control" name="asr" value="" >
       </div>
        <div class="form-group">
           <label for="forecast">Forecast</label><br>
           <input type="text" class="form-control" name="forecast" value="" >
       </div>
        <div class="form-group">
           <label for="image">Tree Image</label><br>
           <input type="file" name="image" value="" >
       </div>
        <div class="form-group">
           <label for="htp">How To Plant</label><br>
          <textarea placeholder="enter how to plant here" class="form-control" cols="10" rows="2"></textarea>
       </div>
       <button class="btn btn-primary form-btn">Add Tree</button>
          </fieldset>
     </form> 
      </div>
       <script src="https://code.jquery.com/jquery.js"></script>          
      <script src="js/bootstrap.min.js"></script>   
       </body>
       </html> 