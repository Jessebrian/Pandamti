<!DOCTYPE html> 
<html>    
<head>      
 <title> Homepage</title>   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">       <!-- Bootstrap -->     
     <link href="css/bootstrap.min.css" rel="stylesheet"> 
    </head> 
    <body>
      <div class="container">
        <form  role="form" method="POST" action="login_conn.php">
          <fieldset>
       <legend>Log In</legend>
          <div class="form-group">
          	<label for="email">Email:</label>
          	<input type="text" class="form-control" name="email" placeholder="enter your email">
          </div>
           <div class="form-group">
          	<label for="password">Password:</label>
          	<input type="password" class="form-control" name="password" >
          </div>
          <button class="btn btn-primary btn-form">Log In</button>
           </fieldset>
</form>
</div>
</body>
</html>