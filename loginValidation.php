<?php


extract($_POST);
include("includes/dbconnect.php");
$email = email;
$rs=mysqli_query($conn,"select * from user where email='$email'");
if (mysqli_num_rows($rs)>0)
{
  echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
  exit;
}


$query="INSERT INTO pacienti (name, priority, age, diseases, email, password, bloodgroup, allergies, is_admin) VALUES ('$name', '$priority', '$age', '$diseases', '$email', '$password', '$bloodgroup', '$allergies', '$is_admin')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $email Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";





/*$sql = 'SELECT * FROM pacienti WHERE email = :email AND password=:password';

$result = mysqli_query($pdo, $sql);

if (isset($_POST['submit'])){
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
  }else {
    header("Location: AfterLogin.php");
  }

}
function validate($email, $password){
    if(mysqli_num_rows($result) > 0){
        while ($row  = ){

        }
    }
  }

-----------------------------------------
 if (isset($_POST['submit'])){
  try {
    validateData($_POST['email'],$_POST['password']);
  }catch(Exception $e){
      $message = "login unsuccessful- invalid username/password";
echo "<script type='text/javascript'>alert('$message');</script>";
  }
} 

  function validateData($email, $password){

  if(empty($email)){
     $message = "email is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
 } else if(empty($password)) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
    header("Location: AfterLogin.php");
  }
}

else if(!preg_match("/^[a-zA-Z]*$/", $email) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }*/


  ?> 

