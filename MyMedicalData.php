<?php
    require './controller/UserController.php';

    $user = new UserController;
    $pacienti = $user->all();

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/MyMedicalDataDesign.css">
</head>
<body>
	<div style="display: flex; justify-content: center;">
	<a href="AfterLogin.php" class="slidee">Back</a>
	</div>
	<br>
	<br>
 <div class="container flex-direction">
      <div class="div1 div1-content" style="width: 100%; display: inline-flex; background-color: rgb(36, 218, 172,0.6);">
      <img src="https://i.ya-webdesign.com/images/group-vector-user.png" width="138" height="128" >
     
     	<div  style="display: block; margin-top: -40px">
       <div class="d1v-con-content" style="text-align: center; font-size: 50px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['name'];?></p>
        </div>
        <div style="font-size:17px; color: white; font-weight: bolder ; margin-top: -50px">
        	<p>My medical data</p>
        </div>
        </div>
      <!--<div style="margin-top: 22px;margin-left: 370px;">
		&nbsp;&nbsp;&nbsp;&nbsp;Greta Thunberg
		<br>

		<div style="font-size: 17px; margin-left: 80px;">
		ID: 1165165454632
		  </div>-->
		</div>
      </div>

      

  </div>
  <div class="container flex-direction">
      <div class="div1">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Priority:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['priority'];?></p>
        </div>
      </div>
      <div class="div2">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Age:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['age'];?></p>
        </div>
      </div>

  </div>
  <div class="container flex-direction">
      <div class="div1">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Diseases:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['diseases'];?></p>
        </div>
      </div>
      <div class="div2">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Blood Group:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['bloodgroup'];?></p>
        </div>
      </div>

  </div>
  <div class="container flex-direction">
      <div class="div1" style="width: 100%">
          <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Allergies/Additional info:
        </div>
        <div style="text-align: center; font-size: 18px; color: white; font-weight: bolder">
        	<p><?php echo $_SESSION['allergies'];?></p>
        </div>
      </div>
     

  </div>


</body>
</html>