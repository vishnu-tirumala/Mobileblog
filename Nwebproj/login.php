<?php include('server.php') ?>
<?php
setcookie("email", "$email", time()+30*24*60*60);


if(isset($_COOKIE["email"])){
    echo "Hi " . $_COOKIE["email"];
} else{
    echo "Welcome Guest!";
}?>
<html>
<head>
<link rel="stylesheet" href="login.css">
</head>
<body background="wall.jpg">
<form method="post" action="login.php">
    <?php include('errors.php') ?>
<!-- <div class="imgcontainer">
   <center> <img src="logo.png" alt="Avatar" class="avatar" style="width:120px;height:100px;">
  </div>
 --><center>
    <br><label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required></br>

    <br><label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required></br>
  </center>
    <center><button type="submit" name="login_user">Login</button></center>
    <center>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <p><strong>Don't have an account?</strong><a href="register.php">Register</a>.</p>
  </center>
</center>

<center>  
  <div class="cancel">
   <button type="button" class="cancelbtn">Cancel</button> 
   
  </div>
</center>

</form>

</body>
</html>
