<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/

   include 'db_connection.php';
   include ('elAsianCloGoogleApi.php');

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>El Asian Clo. Login</title>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <br><br>
            <h2>El Asian Clo.<br></h2>
            <p>Login or register from here to shop.</p>
         </div>
      </div>
      <div class="imageContainer">
        <img src="http://localhost/pictures/bg1.jpg" alt="El Asian Clo." style="width: 1345px;">
      </div>
      <div class="main">
         <div class="col-md-4 col-sm-4">
            <div class="login-form">
               <form method="POST" action="http://localhost/elAsianCloLoginFunction.php">
                     <label for="username"><b>User Name</b></label>
                     <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                     <br>
                     <label for="password"><b>Password</b></label>
                     <input type="password" class="form-control" placeholder="Password" name="password" id="password"><br>
                        <input type="submit" name="login" value="Login" class="btn btn-black">
                        <input type="submit" name="register" value="Register" class="btn btn-secondary">
                        <br><br>
                     <label for="googleSign"><b> Or continue via </b></label>
                        <?php 
                           $auth_url = $g_client->createAuthUrl();
                           echo "<br><a href='$auth_url'>Login With Google</a>";
                           
                           $code = isset($_GET['code']) ? $_GET['code'] : NULL;
                           
                           if(isset($code)) {
                                  try {
                                       $token = $g_client->fetchAccessTokenWithAuthCode($code);
                                       $g_client->setAccessToken($token);
                              
                                 }catch (Exception $e){
                                       echo $e->getMessage();
                                 }
                                 try {
                                     $pay_load = $g_client->verifyIdToken();
                                 }catch (Exception $e) {
                                       echo $e->getMessage();
                                 }
                           } else{
                               $pay_load = null;
                           }
                        ?>
               </form>
            </div> 
         </div>
      </div>
</body>
</html>