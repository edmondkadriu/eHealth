
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
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
  <a href="index.php">Back</a>
  <a href="admin-mode.php" class="active">Dashboard</a>
  

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

<?php
  require './controller/UserController.php';

  $user = new UserController;

  $pacienti = $user->all();

  ?>


<div style="margin-top: 55px;">
  <div class="admin-box">
    <div class="table-model">
      <table>
        <thead>
          <tr>
            <td>User ID</td>
            <td>Name and Surname</td>
            <td>Priority</td>
            <td>Age</td>
            <td>Diseases</td>
            <td>Email</td>
            <td>Password</td>
            <td>Blood group</td>
            <td>Allergies</td>
            <td>Role</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pacienti as $user): ?>
          <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['priority'] ?></td>
            <td><?php echo $user['age'] ?></td>
            <td><?php echo $user['diseases'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['password'] ?></td>
            <td><?php echo $user['bloodgroup'] ?></td>
            <td><?php echo $user['allergies'] ?></td>
            <td><?php echo $user['is_admin'] ?></td>
            <td><a href="admin-mode-edit-users.php?id=<?php echo $user['id']; ?>">edit</a></td>
            <td><a href="admin-mode-delete-users.php?id=<?php echo $user['id']; ?>">delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  


<br>
</div>
</div>




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
 
        <div class="footer-right">
 
        <p class="footer-company-about">
        <span>About the company</span>
    The E-health website provides health services online.
        </p>
 
        <div class="footer-icons">
 
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
 
        </div>
 
        </div>
 
        </footer>
 
<!--<p style="font-size:5vw;">Resize the browser window to see how the text size scales.</p>

<p style="font-size:5vw;">Use the "vw" unit when sizing the text. 10vw will set the size to 10% of the viewport width.</p>

<p>Viewport is the browser window size. 1vw = 1% of viewport width. If the viewport is 50cm wide, 1vw is 0.5cm.</p>-->
 
</body>



</html>