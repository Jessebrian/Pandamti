<!DOCTYPE html> 
<html>    
<head>      
 <title> Homepage</title>   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">       <!-- Bootstrap -->     
     <link href="css/bootstrap.min.css" rel="stylesheet"> 
    </head> 
    <body>
      <div class="container">
        <form role="form" method="POST" action="registration_conn.php">
          <fieldset>
       <legend>Registration</legend>
       <div class="form-group">
       	<label for="username">Username:</label>
       	<input type="text" name="username" class="form-control" value="" placeholder="">
       </div>
       <div class="form-group">
       	<label for="institution">Institution:</label>
       	<select class="form-control" name="institution">
       		<option>--select--</option>
       		<option>Kenya Forestry Research Institute(KEFRI)</option>
       		<option>Kenya Forest Service(KFS)</option>
       	</select>
        </div>
       <div class="form-group">
       	<label for="mail">E-Mail:</label>
       	<input type="text" name="mail" class="form-control" value="" placeholder="me@example.com">
       </div>
       <div class="form-group">
       	<label for="pnumber">Phone Number:</label>
       	<input type="text" name="pnumber" class="form-control" value="" placeholder="07XX XXX XXX">
       </div>
       <div class="form-group">
       	<label for="password">Password:</label>
       	<input type="password" name="password" class="form-control" value="" placeholder="">
       </div>
       <div class="form-group">
       	<label for="Password">Confirm Password:</label>
       	<input type="password" name="password" class="form-control" value="" placeholder="">
       </div>
       <button class="btn btn-primary form-btn">Register</button>


   </fieldset>
</form>
</div>
</body>
</html>