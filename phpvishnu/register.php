
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
   <input type="text" name="txtemail" placeholder="enter email">
   <hr>
   <input type="text" name="txtmobile" placeholder="enter mobile">
   <hr>
   <input type="password" name="txtpass" placeholder="enter password">
   <hr>
   <input type="submit" name="btnsubmit" value="Add">

   
</form>
<?php
if(isset($_POST['btnsubmit']))
{

      include_once('config.php');
      $email = $_POST['txtemail'];
      $mobile = $_POST['txtmobile'];
      $pass = $_POST['txtpass'];
      $res1 = mysqli_query($conn,"select * from customer where email='$email' or mobile='$mobile'");
      if(mysqli_num_rows($res1)>0)
      {
        echo "<script>alert('email or mobile already exist');</script>";
      }
      else
      {
      $res = mysqli_query($conn,"insert into customer(email,mobile,password) values('$email','$mobile','$pass')");
      if(mysqli_affected_rows($conn)>0)
      {
      	echo "<script>alert('data submitted successfully');</script>";

      } 
      else
      {
      	echo "<script>alert('data not submitted successfully');</script>";
      }
  }
}



?>
</body>
</html>