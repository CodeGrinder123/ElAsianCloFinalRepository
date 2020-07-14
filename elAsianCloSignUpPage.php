<?php
   include 'db_connection.php';
   
	if(isset($_POST['login'])){
		header("Location: elAsianClo.php");
	}
?>

<!DOCTYPE html>

<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel = "stylesheet" type = "text/css" href = "elAsianCloLoginPage.css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>El Asian Clo. Register</title>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <br><br>
            <h2>El Asian Clo.<br></h2>
            <p>Register to El Asian Clo. </p>
         </div>
      </div>
      <div class="imageContainer">
        <img src="http://localhost/pictures/bg1.jpg" alt="El Asian Clo." style="width: 1345px;">
      </div>
      <div class="main">
         <div class="col-md-4 col-sm-4">
            <div class="login-form">
               <form method="POST" action="http://localhost/elAsianCloDB.php">
                    <label for="firstName"><b>Name</b></label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName">
                    <br>
                    <label for="lastName"><b>Last Name</b></label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName">
                    <br>
                    <label for="age"><b>Age </b></label>
                    <input type="number" class="form-control" placeholder="Age" name="age" id="age">
                    <br>
                    <label for="username"><b>User Name</b></label>
                     <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                     <br>
                     <label for="password"><b>Password</b></label>
                     <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                     <br>
                     <label for="retypePassword"><b>Re-type Password</b></label>
                     <input type="password" class="form-control" placeholder="Re-type Password" name="retypePassword" id="retypePassword">
                     <br>
                        <input type="submit" name="register" value="Register" class="btn btn-secondary">
               </form>
            </div>
         </div>
      </div>
</body>
</html>