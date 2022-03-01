<?php
    require './controller/AuthController.php';

    $user = new AuthController;
    
    if(isset($_POST['submit'])) {
        $user->login($_POST);
     header('Location: ./AfterLogin.php');
    } 

   /* if(isset($_POST['submit'])) {
      validateData($_POST['email'],$_POST['password']);
    }

  function validateData($email, $password){

  if(empty($email)){
     $message = "email is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
 } else if(empty($password)) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
    $message = "email is not valid";
echo "<script type='text/javascript'>alert('$message');</script>";
  }  else if(strlen($password)<8 )
  {
    $message = "password can not be shorter than 8 characters";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else{

     $user = new AuthController;

     $user->login($_POST);
     header('Location: ./AfterLogin.php');
  }
}*/

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/loginFormDesign.css">
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
<style type="text/css">
  
      .inputt-icons i { 
            position: absolute; 
        } 
          
        .inputt-icons { 
            width: 100%; 
            margin-top: 30px; 


        } 
          
        .icon { 
            padding: 10px; 
            color: green; 
            min-width: 50px; 
            text-align: center;
            
        } 
          
        .inputt-field { 
            width: 380px; 
            padding: 10px; 
            text-align: center; 
            border:1px solid white;
            border-radius: 35px;
          


        } 


    .containerr {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      color: white;
       width: 100%
    }

    
    .containerr input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: white;
      border-radius: 50%;
    }

    
    .containerr:hover input ~ .checkmark {
      background-color: #ccc;
    }

    
    .containerr input:checked ~ .checkmark {
      background-color: green;
    }

    
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .containerr input:checked ~ .checkmark:after {
      display: block;
    }

    
    .containerr .checkmark:after {
      top: 9px;
      left: 9px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: white;
    }
    
    .slide:hover, .slide:focus {
      box-shadow: inset 150px 0 0 0 white;
    }

    .slide {
      color:white;
      transition: 0.3s;
    }
    .slide:hover, .slide:focus {
      border-color: #24daac;
      color: #24daac;
    }

    .slide {
      background: #24daac;
      border: 5px solid #24daac;
      padding: 0.4em 1.8em;
      font-weight: bolder;
      border-radius: 20px;
      font-size: 15px;
      text-decoration:none;
      width: 120px;
      margin-left: 130px;
    }


    .slide2:hover, .slide2:focus {
      box-shadow: inset 140px 0 0 0 white;
    }

    .slide2 {
      color:white;
      transition: 0.3s;
    }
    .slide2:hover, .slide2:focus {
      border-color: #24daac;
      color: #24daac;
    }
    .responsive {
  max-width: 100%;
  height: auto;
  
}
</style>

</head>
<body>
  <div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img src="css/gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>

  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="#" class="active">Home</a>
  <a href="Publications.php">Publications</a>
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


<div class="container flex-direction" id="hide-div">
  <div class="div1">
  <img class="image" src="css/gallery/userrr.png" width="130px" height="130px" style="">
  </div>
  <div class="div2">
     <script type="text/javascript">
        function validate(){
          if(document.myForm.email.value == ""){
            alert("Please fill the Email field");
            document.myForm.email.focus();
            return false;
          } 
          if(document.myForm.password.value == ""){
            alert("Please fill the Password field");
            document.myForm.password.focus();
            return false;
          } 

         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
          {
            return (true);
          } else{
            alert("You have entered an invalid email address!")
            return (false); }



        }
        </script>
       

   <form action="" method="POST"  name="myForm" > 
    <!--<form action="loginValidation.php" onsubmit="return(validate())" method="POST" name="myForm" > -->
            
            <div class="inputt-icons"> 
                <i class="fa fa-envelope icon"> 
              </i> 
                <input class="inputt-field" 
                       type="text" 
                       placeholder="Email"
                       name="email"> 
            </div> 


             <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input class="inputt-field" 
                       type="password" 
                       placeholder="Password"
                       name="password"> 
            </div>

           <!-- <div class="remember" >
            <br>
            <label class="containerr">Remember me
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
    </div>-->
    <br>
    <input  class="slide" type="submit" value="Log in" name="submit">
  </form>
  <br>
  
 </div>

</div>
 <?php if(isset($_SESSION['name'])): ?>
    <script>
      document.getElementById("hide-div").style.display="none";
    </script>
    <br><br><br><br>
    <div style="display: block; justify-content: center;">
    <p style="text-align: center; font-weight: bold; font-size: 30px; color: white"> YOU ARE ALREADY LOGGED IN!</p>
  <a href="AfterLogin.php" class="slide" style="width: 190px; margin-left: 585px" >Back to main page</a> <br> <br> <br>
   <a href="logout.php" class="slide" style="width: 190px; margin-left: 618px" >Log out</a>
  </div>
  <?php endif; ?>
<br>
</div>

<!--FOOTER-->
<?php include 'includes/footer.php'; ?>


 
</body>
</html>