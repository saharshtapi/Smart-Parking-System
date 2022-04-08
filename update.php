<?php

include 'config.php';
session_start();

$email=$_POST['email'];
if ($_POST['full_name']!=NULL) {
  $full_name=$_POST['full_name'];
  // echo gettype($full_name);
  mysqli_query($conn, "UPDATE users SET full_name='$full_name' WHERE email='$email'");
}
if ($_POST['address']!=NULL) {
  $address=$_POST['address'];
  // echo gettype($full_name);
  mysqli_query($conn, "UPDATE users SET address='$address' WHERE email='$email'");
}
if ($_POST['vehicle_no']!=NULL){
  $VNo=$_POST['vehicle_no'];

  mysqli_query($conn, "UPDATE users SET VNo='$VNo' WHERE email='$email'");
}
if ($_POST['password']!=NULL) {
  $password=md5($_POST['password']);
  mysqli_query($conn, "UPDATE users SET password='$password' WHERE email='$email'");
}

$v_address = mysqli_fetch_row(mysqli_query($conn, "SELECT address FROM users WHERE email='$email'"))[0];
$v_vno = mysqli_fetch_row(mysqli_query($conn, "SELECT VNo FROM users WHERE email='$email'"))[0];
if ($v_vno==NULL OR $v_address==NULL) {
  echo "<script>alert('Please enter Address and Vehicle No.'); window.location.href='http://localhost/sps/mydetails.php';</script>";
}
else{
  echo "<script>alert('Details Updated Successfully!!!'); window.location.href='http://localhost/sps/welcome.php';</script>";
}

 ?>
