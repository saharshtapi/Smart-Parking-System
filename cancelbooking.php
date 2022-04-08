<?php

include 'config.php';


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="headstyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Cancel Booking</title>
<style media="screen">
  table,td,th{
    border: 1px solid black;
  }
  table{
    border-collapse: collapse;
    width: 50%;
  }
  td,th{
    font-weight: bold;
    text-transform: uppercase;
    padding: 5px;
    text-align: center;
  }
  th{
    background-color: #7284E4;
  }
  .newt button{
    border-radius: 50%;
  }
  .newt button:hover{
    background-color: white;
    font-size: 1.2rem;
  }
  h1 {
    color: var(--text-dark);
    font-weight: var(--weight-bold);
    font-size: 32px;
    margin-top: 0;
    margin-bottom: 16px;
  } /*!sc*/
  @media (min-width: 600px) {
    h1 {
      font-size: 48px;
    }
  } /*!sc*/
</style>

  </head>
  <body>
      <div class="Pages__Page-sc-1clgew6-0 duyyqe">
        <div class="Navbar__Wrapper-sc-bot6ol-0 fnHrwZ">
          <div class="Navbar__Inner-sc-bot6ol-1 jZXXFh">
            <a href="/"><div class="Navbar__Logo-sc-bot6ol-2 kljQkp">Smart Parking System</div></a>
            <div class="Navbar__Menu-sc-bot6ol-3 bhniUR">
            </div>
          </div>
        </div>
        <header class="Pages__Header-sc-1clgew6-1 cqwXAW">
          <h1><a style="color:black; text-decoration: none" href="/sps/welcome.php">Park-INN</a></h1>
          <div class="Pages__HeaderMenu-sc-1clgew6-2 dcAzoj">
            <path d="M4 6H11L7.5 10.5L4 6Z" fill="currentColor"></path>
            <a style="color:black; text-decoration: none;" href="/sps/logout.php" class="Pages__HeaderMenuItem-sc-1clgew6-3 cWLeOq">Logout</a>
            <button type="button" id="radix-id-0-5" aria-haspopup="menu" data-state="closed" aria-label="Dropdown Trigger" class="Dropdown__Trigger-sc-1roo6xo-0 iStbis"            >
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none"xmlns="http://www.w3.org/2000/svg">
                <path d="M3.625 7.5C3.625 8.12132 3.12132 8.625 2.5 8.625C1.87868 8.625 1.375 8.12132 1.375 7.5C1.375 6.87868 1.87868 6.375 2.5 6.375C3.12132 6.375 3.625 6.87868 3.625 7.5ZM8.625 7.5C8.625 8.12132 8.12132 8.625 7.5 8.625C6.87868 8.625 6.375 8.12132 6.375 7.5C6.375 6.87868 6.87868 6.375 7.5 6.375C8.12132 6.375 8.625 6.87868 8.625 7.5ZM12.5 8.625C13.1213 8.625 13.625 8.12132 13.625 7.5C13.625 6.87868 13.1213 6.375 12.5 6.375C11.8787 6.375 11.375 6.87868 11.375 7.5C11.375 8.12132 11.8787 8.625 12.5 8.625Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" ></path>
              </svg>
            </button>
          </div>
        </header>
        <div class="Pages__Subheader-sc-1clgew6-6 dvfXtq">
          <div class="Pages__CurrentPage-sc-1clgew6-7 gmAhtH">
            /Smart Parking System
          </div>
          <p>
           This is the place where you cancel your bookings...
          </p>
        </div>
        </div>
<div class="new1">

<?php
session_start();
$email=$_SESSION['email'];
$sql="SELECT * FROM bookings WHERE email='$email' and status='0' ORDER BY location,day";
$result= mysqli_query($conn, $sql);
echo "<table class='newt'><tr><th>LOCATION</th><th>DAY</th><th>SPOT</th><th>CANCEL</th></tr>";
while($row=mysqli_fetch_array($result))
{
//  echo "$row[1] $row[2] $row[3] $row[4] <br>";
$x="$row[1],"."$row[2],"."$row[3]";
echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>"."<button data-bs-toggle='modal' data-bs-target='#exampleModal' id='btt' onclick='test(\"$x\")' value='$x' style='color:red;' class='fas fa-times'></button>"."</td></tr>";

}
echo "</table>";

 ?>
</div>
<script type="text/javascript">

function test(e){
   console.log(e);
   document.getElementById('cancelv').value=e;
}

</script>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to cancel this booking?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form class="" action="/sps/cancelbooking.php" method="post">
          <input type="text" hidden="hidden" id="cancelv" name="cancelv">
          <button name="buttonc" type="submit" class="btn btn-primary">Yes</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php

if (isset($_POST['buttonc'])) {
  $val=$_POST['cancelv'];
  $location=explode(',',$val)[0];
  $day=explode(',',$val)[1];
  $slot=explode(',',$val)[2];
  $sql="UPDATE bookings SET status='2' WHERE location='$location' and day='$day' and spot='$slot'";
  mysqli_query($conn, $sql);
  echo "<script>window.location.href='http://localhost/sps/cancelbooking.php'</script>";
}

 ?>
  </body>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</html>
