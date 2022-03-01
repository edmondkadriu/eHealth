<?php
  extract($_POST);
include("includes/dbconnect.php");

$rs=mysqli_query($conn,"select * from pacienti where email='$email'");

if (mysqli_num_rows($rs)>0)
{
  echo "<br><br><br><div class=head1>Email already Exists!</div>";
  exit;

}
isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;
$password = password_hash($request['password'], PASSWORD_DEFAULT);


$query="INSERT INTO pacienti (name, priority, age, diseases, email, password, bloodgroup, allergies, is_admin) VALUES ('$name', '$priority', '$age', '$diseases', '$email', '$password', '$bloodgroup', '$allergies', '$isAdmin')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
//echo "<br><br><br><div class=head1>Your Login ID  $email Created Sucessfully</div>";
//echo "<br><div class=head1><a href=index.php>Login</a></div>";


    return header('Location: ./index.php');


  /*if(isset($_POST['submit']))
  {
   validateData($_POST['name'],$_POST['priority'],$_POST['age'],$_POST['diseases'],$_POST['email'],$_POST['password'],$_POST['bloodgroup'],$_POST['allergies']);
  } 

  function validateData($name, $priority, $age, $diseases, $email, $password, $bloodgroup, $allergies){


  if(empty($name)){
     $message = "name is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
 } else if(empty($priority)) 
  {
    $message = "priority is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(empty($age)) 
  {
    $message = "age is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(strlen($age) > 3) 
  {
    $message = "your age should contain maximum 3 number";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(empty($diseases)) 
  {
    $message = "diseases is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($email))
  {
    $message = "email is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($password)) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($bloodgroup)) 
  {
    $message = "bloodgroup is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($allergies)) 
  {
    $message = "allergies is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(strlen($password) < 8) 
  {
    $message = "password filed should be longer than 8 characters";
echo "<script type='text/javascript'>alert('$message');</script>";
  } 
  else {
    header('Location: index.php');
  }
}*/
  ?> 