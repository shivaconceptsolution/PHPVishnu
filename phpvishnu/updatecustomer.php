<?php
include_once('config.php');
 $id = $_POST['hid'];
 $email = $_POST['txtemail'];
 $mobile = $_POST['txtmobile'];
 $pass = $_POST['txtpass'];
 $res = mysqli_query($conn,"update customer set email='$email',mobile='$mobile',password='$pass' where customerid=$id");
 if(mysqli_affected_rows($conn)>0)
 {
    echo "<script>alert('data updated successfully');window.location='showreg.php';</script>";
 }





?>