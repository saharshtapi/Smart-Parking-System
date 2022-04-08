<?php

include 'config.php';

session_start();

$location=$_GET["location"];
$day=$_GET["day"];
$spot=$_GET["spot"];
$email=$_SESSION["email"];

//echo "$location $day $spot $email";
setcookie('day','---');
if($day=='---'){
  echo '<script>alert("Please select a day"); window.location.href="http://localhost/sps/newbooking.html"</script>';
}
else{
  $sql1="SELECT * from bookings where day='$day' AND location='$location' AND spot='$spot'";
  $result=mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0){
    echo '<script>alert("Please select another spot as this spot is already booked!!!"); window.location.href="http://localhost/sps/newbooking.html"</script>';
    }
    else {
      $sql = "INSERT INTO bookings (email, location, day, spot, status) VALUES ('$email', '$location', '$day', '$spot',0)";
      mysqli_query($conn, $sql);
      echo '<script>alert("Booking Successful!!!"); window.location.href="http://localhost/sps/welcome.php"</script>';
    }
}

 ?>
