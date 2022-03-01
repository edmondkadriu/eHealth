
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/AboutUs.css">
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
  <a href="publications.php" >Publications</a>
  <a href="aboutUs.php" class="active" >About</a>
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
  <div class="about">
    <br>
  <p>We are a team of youngsters from Mitrovica</p>
  <p>Our everyday lives are affected by technology and new technologies are discovered everyday,<br>
        so we try to keep up with them and hopefully make Kosovo a better place and the world too.</p>
  </div>
  <div class="row" style="margin-top: -100px">
    <div class="team">
      <h2>Our Team</h2>
    </div>
      <?php 
        require './controller/AboutUsController.php';
        $about = new AboutUsController;

        $aboutus = $about->all();
      ?>
                    
      <?php foreach($aboutus as $about): 
        if($about["is_admin"]==1){
        ?>
        
        <div class="column">
          <div class="card">
            <img src=<?php echo $about["photo_path"]; ?> alt=<?php echo $about["name"]; ?> width="100%" height="100%">
              <div class="containeri">
              <h2 style="color: white" ><?php echo $about["name"]; ?></h2>
              <p class="title"><?php echo $about["title"]; ?></p>
              <p style="font-size: 14px; color: white"><?php echo $about["admin_pershkrimi"]; ?></p>
              <p style="font-size: 15px; color: white"><?php echo $about["email"]; ?></p>
              <a href="ContactUs.php"  target="_blank" style="color:green; font-weight: bold"><button onclick="ContactUs.php" class="button" >Contact</button></a>
              </div>
            </div>
          </div>
        <?php } ?>
          <?php endforeach; ?>
                    
        </div>
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