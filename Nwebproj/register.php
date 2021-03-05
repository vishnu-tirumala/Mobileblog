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
<script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var password_1 = document.forms["myForm"]["password_1"].value;
  var mobile = document.forms["myForm"]["number"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
   if (password_1 == "") {
    alert("Password must be filled out");
    return false;
  }

   if (mob == "") {
    alert("Mobile must be filled out");
    return false;
  }
}
</script>
<link rel="stylesheet" href="regis.css">
</head>
<body background="wall.jpg">
<form name="myForm"  onsubmit="return validateForm()" action="register.php" method="post">
  <?php include('errors.php') ?>
  <div class="container">
   <center><h1>Register</font></h1>
    <p>Please fill in this form to create an account.</p></center>

 <center><label for="username"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="username" value="<?php echo $username; ?>"><br>
 <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  value="<?php echo $email; ?>"><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"><br>

  <label for="Mobile Number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Number" name="number">

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="reg_user">Register</button>
  

  
    <p><strong>Already have an account?</strong><a href="login.php">Sign in</a>.</p></center>
  </div>
</form>
</body>
</html>
