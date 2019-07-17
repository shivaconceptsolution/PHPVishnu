<?php
include_once('config.php');
 $id = $_POST['hid'];
 $email = $_POST['txtemail'];
 $mobile = $_POST['txtmobile'];
 $pass = $_POST['txtpass'];
 /*$res = mysqli_query($conn,"delete from customer where customerid=$id");*/
 $res = mysqli_query($conn,"update customer set status=1 where customerid=$id");
 if(mysqli_affected_rows($conn)>0)
 {
    echo "<script>alert('data deleted successfully');window.location='showreg.php';</script>";
 }





?>