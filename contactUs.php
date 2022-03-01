<?php
       require './controller/ContactController.php';

       if(isset($_POST['submit']))
      {
      validateData($_POST['emri_mbiemri'],$_POST['email'],$_POST['mesazhi']);
      } 
      function validateData($emri_mbiemri, $email, $mesazhi){


      if(empty($emri_mbiemri)){
        $message = "Name is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
    } else if(empty($email)) 
      {
        $message = "Email is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
      } else if(empty($mesazhi)) 
      {
        $message = "Message is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
      }
      $con = new ContactController;

        $con -> store($_POST);
    
        header('Location: ./contactUs.php');
    }
     
          ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/contactUsDesing.css">
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
  <a href="aboutUs.php">About</a>
  <a href="contactUs.php" class="active">Contact</a>
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
<br> 
<div class="container flex-direction" id="permb" style="padding-left:80px;">
      <div class="div1" >
            <div class="title" >
                <h1>Contact Information</h1>
            </div>
            <div class="Contact">
               <h2>Media / Press and Conferences</h2>
                <h4>Email your enquiries to <A HREF="mailto:press@ehealth.al">press@ehealth.al</A> or call:<br> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kosovo :    +383 44 673 237<br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Albania:    + 355 4 83 27 050<br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macedonia:  + 389 2 54 12 929</h4>
               </div>
            </div>
            <div class="Contact">
                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            </div>
             <div class="div2">
            
             <script type="text/javascript">
        function validate(){
          if(document.myForm.emri_mbiemri.value == ""){
            alert("Please fill the Title field");
            document.myForm.post_title.focus();
            return false;
          }
        }
        </script>
                    <!-- <script type="text/javascript">
                                  function validate(){
                          var regName = /(\p{L}+)/g;
                          var emri = document.getElementById('emri_mbiemri').value;
                        
                        if(document.myForm.emri_mbiemri.value == "" ){
                          if(!regName.test(emri)){
                          alert("Please fill the Name and Surname field");
                          document.myForm.emri_mbiemri.focus();
                          return false;
                          }
                        } -->
                        <!-- // var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
                        //   var emri = document.getElementById('emri_mbiemri').value;
                        //   if(!regName.test(emri)){
                        //       alert('Please enter your full name (first & last name)');
                        //       document.getElementById('emri_mbiemri').focus();
                        //       return false;
                        //   }else{
                        //       return true;
                        //   }
                            /*if(document.myForm.email.value==""){
                                alert("Sheno email-in tuaj");
                                document.myForm.email.focus();
                                return false;
                            }if(document.myForm.mesazhi.value=="" || document.myForm.mesazhi.value.length <= 100){
                                alert("Sheno mesazhin-in tuaj (max 100)");
                                document.myForm.mesazhi.focus();
                                return false;*/
                            }
                        }
                        
                                                
                    </script> -->
              
              <div style="margin-top: -20px">
            
                    <form action ="" name="myForm" id="registration" method="POST" onsubmit="return(validate())">
                    <h4 style="color: black; margin-bottom: 3%;">Name and Surname:</h4>
                    <input type="text" name="emri_mbiemri" style="margin-top: -5%; padding:10px; width: 100%;  text-align: center; 
                    border:1px solid white; border-radius: 15px;" data-validation="custom" 
                    data-validation-error-msg="Emri nuk duhet te jete i zbrazet dhe nuk pranon numra!" />
                    
                    <h4 style="color: black;margin-bottom: 3%;margin-top: 3%">Email:</h4>
                    <input type="text" name="email" style="margin-top: -5px; padding:10px; width: 100%;  text-align: center; 
                    border:1px solid white; border-radius: 15px;" required="required" data-validation="email" data-validation-error-msg="Sheno nje email te sakte!"/>
        
                    <h4 style="color: black;margin-bottom: 3%;margin-top: 3%">Message:</h4>
                    <textarea type="text" name="mesazhi" style="margin-top: -5px; padding:10px;  width: 100%; height: 70px;
                    border:1px solid white; border-radius: 15px; white-space: nowrap;" required="required" data-validation="length" data-validation-length="1-100" 
                    data-validation-error-msg="Lejohen 1-100 Karaktere!"></textarea>
                    <br>
                    <br>
                        <div id="bodyy">
                <div class="buttons" style="margin-top: -20px">
                  <input type="submit" name="submit" value="Send" class="slidee"> 
                </div>
                </div>  
                          </form>
                          </div>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
                            <script>
                $.validate({
                    form: '#registration'
                    });
                </script>
                  </div>
                </div>
       

                <div class="container flex-direction" style="padding-left:80px;">
      <div class="div1" >
      <hr>
            <br>
            <div class="title2">
                <h1>Locations (Offices)</h1>
            </div>
            <div class="Contact3">
                <h2>Prishtina <img src="css/gallery/pin.png" width="25px" height="25px"></h2>
                <h4><br> <br>
                    Rruga "Agim Ramadani",<br><br>
                    Nr.25,<br><br>
                    Prishtina 10000.</h4>
            </div>
            <div class="Contact4">
                <h2>Mitrovica</h2> <img src="css/gallery/pin.png" width="25px" height="25px"><br>
                <h4><br> <br>
                    Rruga "Mbretresha Teute",<br><br>
                    Nr.16,<br><br>
                    Mitrovice 40000.</h4>
            </div>
           
          
            </div>
      <div class="div2">
     <hr>
      
                <iframe style="height: 500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.843074488287!2d21.158608816001596!3d42.64348662514689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd725b95c5b659fb!2sSpitali%20Amerikan!5e0!3m2!1sen!2s!4v1590188080746!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </hr>
  </div>

      </div>
      <br>
      <br> <br> <br> <br>

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