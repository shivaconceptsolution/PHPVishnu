<?php
$id = base64_decode($_GET['q']);
include_once('config.php');
$res = mysqli_query($conn,"select * from customer where customerid=$id");
$arr = mysqli_fetch_array($res);


?>

<form action="updatecustomer.php" method="post">
	<input type="hidden" name="hid" value="<?php echo $arr['customerid']; ?>" />
	
   <input type="email" name="txtemail" value="<?php echo $arr['email']; ?>">
   <hr>
   <input type="number" name="txtmobile" value="<?php echo $arr['mobile']; ?>">
   <hr>
   <input type="password" name="txtpass" value="<?php echo $arr['password']; ?>">
   <hr>
   <input type="submit" name="btnsubmit" value="Update">

   
</form>





