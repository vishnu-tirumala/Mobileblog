<?php


if(isset($_COOKIE["email"])){
    echo "Hi " . $_COOKIE["email"];
} else{
    echo "Welcome Guest!";
}?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>MBlog</title>
<!--



-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>



<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">MBlog</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="register.php">Register</a></li>
                    
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>This is a Mobile and Laptop Blog</h1>
                    <h4>LETS GET IT STARTED</h4>
                    
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              
                                   <img src="images/pic1.jpg" class="img-responsive" alt="Blog Image">
                              
                         </div>
                         <div class="blog-post-title">
                              <h3>The best Laptop existing right now</h3>
                         </div>
                        
                         <div class="blog-post-des">
                              <p>Alienware Area 51 is the best laptop your money can buy right now.Sporting a new look and the first-ever design that enables upgradeable graphics, Alienware is ready to take its place as the king of semi-mobile gaming. The Area-51m (starting at $2,549, $5,099 as tested) doesn't look like anything we've ever seen from the brand. It's less Independence Day and more Flight of the Navigator. But there's more to this baby than just a pretty new visage.

                               Armed with a desktop Intel Core i9 processor and one of Nvidia's superpowered RTX GPUs, it absolutely demolished every test we put in front of it with graceful aplomb. It will also make a big dent in your wallet. But you consider that this is the first future-proof gaming laptop, it seems a small price to pay for a truly upgradable system and what Alienware is calling its first real desktop replacement.</p>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                                   <img src="images/pic2.png" class="img-responsive" alt="Blog Image">
                              
                         </div>
                         <div class="blog-post-title">
                              <h3>Oneplus 6T. Best for your Pocket and for you.</h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>OnePlus 6T is undoubtedly one of the most amazing smartphone's launches ever. This powerful smartphone by a relatively young brand OnePlus is packed with exceptional features and robust configuration to provide an ultimate mobile user experience. What makes this smartphone choice of many is its speed, the device sports a new in-screen fingerprint sensor hidden under its display that takes just 0.36 seconds and what not!.
                              It has exceptional screen with a teardrop notch. Amazing Cameras,Great Build quality and everyting you expect from your daily driver.</p>
                              
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mykA0jrZWF0" allowfullscreen></iframe>
                              </div>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">One of the most trusted reviwers. Dave Lee.</a></h3>
                         </div>
                        
                         <div class="blog-post-des">
                              <p>In the above video Dave describes the current state of a gaming market and its demands and how one should tread carefully when buying laptops this year ,with the RTX chipsets incoming from Nvidia, Gaming will become more expensive and hardcore. The chipsets of the current generation will become cheaper and hence affordable for the masses.</p>
                              
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              
                                   <img src="images/pic3.png" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>The Best phone, with the best multimedia experience</h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>If you got money and aren't concerned about sofware updates. This is it, The best one. It has the best display,best sound, best cameras, in short it is a multimedia powerhouse, 4K videos? HDR content? Best viewing experience? Wter and Dust resistance. YES.

                              Go check this beast out. </p>
                              
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              
                                   <img src="images/pic4.png" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>Vestibulum vel mauris nec ex tempus</h3>
                         </div>
                         
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>MBlog Studio</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <div class="footer-copyright">
                         <p>Copyright &copy; 2017 Your Company - Design: Tooplate</p>
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Talk to us</h3>
                    <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                    <p><i class="fa fa-phone"></i> 010-020-0990</p>
                    <p><i class="fa fa-save"></i> info@company.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>