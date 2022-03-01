<?php
    require './controller/UserController.php';

    $user = new UserController;
    $pacienti = $user->all();

?>

<?php

  $isAdmin=$_SESSION['is_admin'];
     if($isAdmin == "1"){
     return header("Location: admin-mode.php");
     } else if ($isAdmin == "0"){
          echo "YOU DON'T HAVE THE PERMISSION TO ENTER THIS PAGE WITHOUT BEIGN AN ADMIN!";
          return false;
      }
  ?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  .slide:hover, .slide:focus {
      box-shadow: inset 150px 0 0 0 white;
    }

    .slide {
      transition: 0.3s;
    }
    .slide:hover, .slide:focus {
      border-color: #24daac;
      color: red;

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
    }

    .first-cont .aed-buttons{
  display: flex;
  justify-content: center;
  margin-bottom: 25px;
    }
    th{
      border: 1px solid white;
    }
    td{
      border: 1px solid white;
    }
    table{
      border: 2px solid white;
      color: white;
    }
    thead{
      font-weight: bold;
    }

    .first-cont .table-model{
  display: flex;
  justify-content: center;
    }
  </style>

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
<link rel="shortcut icon" href="css/gallery/health-clipart-png-8.png">
</head>
<body>

<div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img src="css/gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>

  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
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
<div style="margin-top: 55px; margin-left: -125px">
  <div class="admin-box">
    <div class="aed-buttons">
    <button class="slide"><a href="admin-mode-users.php" style="text-decoration:none;">USERS</a></button>
    <!--ADMINISTRATORI NUK SHTON USERS TE RINJE MIREPO VETEM LAJME TE REJA-->

    <button class="slide" style="margin: 0"><a href="admin-mode-news.php" style="text-decoration:none">NEWS</a></button>
    <!--EDIT DUHET MI PAS DY OPSIONE EDIT USER OSE EDIT NEWS-->
    </div>

    
  </div>
  


<br>
</div>
</div>

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>

</body>
</html>