<?php 

require './controller/NewsController.php';


    if(isset($_POST['submitted'])){
      validateData($_POST['post_title'],$_POST['post_body'],$_POST['image'],$_POST['admin_id']);
        
    }
    function validateData($post_title, $post_body, $image,$admin_id){


      if(empty($post_title)){
         $message = "Title is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
     } else if(empty($post_body)) 
      {
        $message = "Permbajtja is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
      } else if(empty($image)) 
      {
        $message = "Image is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
      }else if(empty($admin_id)) 
      {
        $message = "Admin is empty";
    echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $news = new NewsController;

        $news -> store($_POST);
        header('Location: ./publications.php');
      }
      
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

</header>

 <div class="container flex-direction">
      <div class="div1">
      <script type="text/javascript">
        function validate(){
          if(document.myForm.post_title.value == ""){
            alert("Please fill the Title field");
            document.myForm.post_title.focus();
            return false;
          }
          if(document.myForm.post_body.value == ""){
            alert("Please fill the post_body field");
            document.myForm.post_body.focus();
            return false;
          }
          if(document.myForm.image.value == ""){
            alert("Please fill the image field");
            document.myForm.image.focus();
            return false;
          }
          if(document.myForm.admin_id.value == ""){
            alert("Please fill the admin_id field");
            document.myForm.admin_id.focus();
            return false;
          }
        }
        </script>
         <form action="" method="POST" onsubmit="return(validate())" name="myForm" > 
        Titulli:  
            <input type="text" name="post_title" ><br>
            <textarea name="post_body"  cols="50" rows="4" placeholder= "Permbajtja e Lajmit"></textarea> <br>
        Fotografia:
            <input type="text" name="image" ><br>
        Admini:
            <input type="text" name="admin_id" ><br>
            <input type="submit" name="submitted" value="Shto Lajmin">
        </form>
         
      </div>
  </div>
</div>

<!--FOOTER-->
<?php include 'includes/footer.php'; ?>
 
</body>

</html>