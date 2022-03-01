<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/publicationsDesing.css">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title style="margin-left: 100px"> 
  E-Health
</title>
<link rel="shortcut icon" href="css/gallery/health-clipart-png-8.png">
</head>
<body>

<div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img src="css/gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>

  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="index.php">Home</a>
  <a href="#" class="active">Publications</a>
  <a href="aboutUs.php">About</a>
  <a href="contactUs.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</header>
<div class="main">
            <div class="containerr">

                <input type="radio" name="images" id="i1" checked>
                <input type="radio" name="images" id="i2">
                <input type="radio" name="images" id="i3">

                <div class="slide_img" id="one">
                    <img src="css/gallery/img1.jpg">

                    <label for="i3" class="pre"></label>
                    <label for="i2" class="nxt"></label>

                </div>
                <div class="slide_img" id="two">
                    <img src="css/gallery/img2.png">

                    <label for="i1" class="pre"></label>
                    <label for="i3" class="nxt"></label>

                </div>
                <div class="slide_img" id="three">
                    <img src="css/gallery/foto3.png">

                    <label for="i2" class="pre"></label>
                    <label for="i1" class="nxt"></label>

                </div>

                <div class="nav">
                    <label class="dots" id="dot1" for="i1"></label>
                    <label class="dots" id="dot2" for="i2"></label>
                    <label class="dots" id="dot3" for="i3"></label>
                </div>
        </div>



</div>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;Latest Publications</h1>
    
    <?php
        require './controller/NewsController.php';

        $news = new NewsController;

        $newsdata = $news->allNews();

  ?>
    
    <div class="news">
    
    <?php foreach($newsdata as $news): ?>
        
        <div class="box">
       
               <div class="foto">
                  <img src="<?php echo $news ['image']; ?>" >
               </div>
                <div class="titulli">
                   <p style="font-size: 16px"><strong><?php echo $news ['post_title']; ?></strong></p> 
                    <h6><?php echo $news ['post_time']; ?></h6>
                </div>
                <div class="note">
                 <h5>NOTE: Move mouse over Text to view Full Story!</h5>
                </div>
                <div class="lajmi">
                  <h4> <?php echo $news ['post_body']; ?></h4>
                </div>
                </tbody>  
        </table>
        </div>
        
        <?php  endforeach; ?>
</div>

<!--FOOTER-->
<footer class="footer-distributed">
 
        <div class="footer-left">
 
        <h3>e-Health</h3>
 
        <p class="footer-links">
        <a href="#">Home</a>
    ·
        <a href="#">Publications</a>
    ·
        <a href="#">About</a>
    ·
        <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">e-Health &copy; 2022</p>
        </div>
 
        <div class="footer-center">
 
        <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Mbreteresha Teute St</span> Mitrovica, Kosovo</p>
        </div>
 
        <div>
        <i class="fa fa-phone"></i>
        <p>+383 49 123 456</p>
        </div>
 
        <div>
        <i class="fa fa-envelope"></i>
        <p><a style="color:white" href="mailto:support@company.com">contact@ehealthkosovo.com</a></p>
        </div>
 
        </div>
 
        <div class="footer-right" style="color: white">
         E-health on social media
        <div class="footer-icons">
 
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
 
        </div>
 
        </div>
 
        </footer>
 
 
</body>

</html>