<?php
    require './controller/UserController.php';

    $user = new UserController;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $pacienti = $user->edit($id);

    if(isset($_POST['submit'])) {
        $user->update($id, $_POST);
        header("Location: admin-mode-users.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin-mode-edit-users-design.css">
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

<div>
 <div class="container flex-direction">
      <div class="div1">
      <script type="text/javascript">
        function validate(){
          if(document.myForm.Name.value == ""){
            alert("Please fill the Name and Surname field");
            document.myForm.Name.focus();
            return false;
          }
          var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
            var name = document.getElementById('name').value;
            if(!regName.test(name)){
                alert('Please enter your full name (first & last name)');
                document.getElementById('name').focus();
                return false;
            }else{
                return true;
          }
          if(document.myForm.Date.value == ""){
            alert("Please fill the Date field");
            document.myForm.Date.focus();
            return false;
          }
          if(document.myForm.Nationality.value == ""){
            alert("Please fill the Nationality field");
            document.myForm.Nationality.focus();
            return false;
          }
          if(document.myForm.Phone.value == ""){
            alert("Please fill the Phone field");
            document.myForm.Phone.focus();
            return false;
          }
          if(isNaN (document.myForm.Phone.value)){
            alert("Please fill the Phone field with only numbers");
            document.myForm.Phone.focus();
            return false;
          }
          if((document.myForm.Phone.value.length) != 11){
            alert("The phone field should contain 10 numbers and sign");
            document.myForm.Phone.focus();
            return false;
          }
          if(document.myForm.Email.value == ""){
            alert("Please fill the Email field");
            document.myForm.Email.focus();
            return false;
          }
          if(document.myForm.idNumber.value == "" ){
            alert("Please fill the ID Number field");
            document.myForm.idNumber.focus();
            return false;
          }
          if(isNaN (document.myForm.idNumber.value)){
            alert("Please fill the ID Number field with only numbers");
            document.myForm.idNumber.focus();
            return false;
          }
          if(document.myForm.qyteti.value == "City"){
            alert("Please fill the City field");
            return false;
          } 
          var female = document.getElementById('female').checked;
          var male = document.getElementById('male').checked;
          var not = document.getElementById('not').checked;

          if(female==false && male==false && not==false){
            alert("Please select a gender");
            return false;
          }
            return (true);
        }
      </script>
         <form action="" name="myForm" method="POST" style="max-width:450px; margin-left: 84px; margin-top: 50px; width: 100%"> 
            
            <div class="inputt-icons"> 
                <i class="fa fa-user icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text" 
                       value="<?php echo $pacienti['name']; ?>"
                       name="name"
                       id="name"> 
            </div> 

             <div class="inputt-icons"> 
                <i class="fa fa-calendar icon"> 
              </i> 
                <input style="border-radius: 35px"  class="inputt-field" 
                       value="<?php echo $pacienti['priority']; ?>"
                       type="text"
                       name="priority"
                       sty> 
            </div> 
  
  
            <div class="inputt-icons"> 
                <i class="fa fa-flag icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       value="<?php echo $pacienti['age']; ?>"
                       name="age"> 
            </div> 

                       <div class="inputt-icons"> 
                <i class="fa fa-phone icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       value="<?php echo $pacienti['diseases']; ?>"
                       name="diseases"> 
            </div> 

             <div class="inputt-icons"> 
                <i class="fa fa-envelope icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       value="<?php echo $pacienti['email']; ?>"
                       name="email"> 

            </div> 
              <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       value="<?php echo $pacienti['bloodgroup']; ?>"
                       name="bloodgroup"> 
            </div>

          <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       value="<?php echo $pacienti['allergies'];?>"
                       name="allergies"> 

          </div>
          <br>
           <p style="display: inline; color: white; font-weight: bold">Admin: </p><input type="checkbox" <?php echo $pacienti['is_admin'] === '1' ? 'checked' : '' ?>name="is_admin">

          
          <br><br><br>
          
        <div id="bodyy">
    <div class="buttons">
    <!--  <input onclick="finish()" type="submit" value="Register" class="slidee">-->
      <input type="submit" name="submit" class="slidee" value="Register">


      </div>
    </div>
        </form>   
      </div>
  </div>
</div></div>

<!--FOOTER-->
<footer class="footer-distributed">
 
        <div class="footer-left">
 
        <h3>e-Health</h3>
 
        <p class="footer-links">
        <a href="#">Home</a>
    ·
        <a href="#">Publications</a>
    ·
        <a href="#">Pricing</a>
    ·
        <a href="#">About</a>
    ·
        <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">e-Health &copy; 2020</p>
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