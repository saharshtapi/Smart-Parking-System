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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="headstyle.css" />
    <title>View Booking</title>
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
          <h1><a href="/sps/welcome.php">Park-INN</a></h1>
          <div class="Pages__HeaderMenu-sc-1clgew6-2 dcAzoj">
            <path d="M4 6H11L7.5 10.5L4 6Z" fill="currentColor"></path>
            <a href="/sps/logout.php" class="Pages__HeaderMenuItem-sc-1clgew6-3 cWLeOq">Logout</a>
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
           Your previous booking details are as follows:
          </p>
        </div>
        <div class="new1">
          <ul class="showcase">
            <li>
              <i style='color:yellow; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i>
              <small>Booked</small>
            </li>
            <li>
              <i style='color:green; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i>
              <small>Used</small>
            </li>
            <li>
              <i style='color:red; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i>
              <small>Cancelled</small>
            </li>
          </ul>
        <?php
        session_start();
        $email=$_SESSION['email'];
        $sql="SELECT * FROM bookings WHERE email='$email' ORDER BY location,day";
        $result= mysqli_query($conn, $sql);
        echo "<table border='2'><tr><th>LOCATION</th><th>DAY</th><th>SPOT</th><th>STATUS</th></tr>";
        while($row=mysqli_fetch_array($result))
        {
        if ($row[4]=='0') {
          echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><i style='color:yellow; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i></td></tr>";
        }
        elseif ($row[4]=='1') {
          echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><i style='color:green; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i></td></tr>";
        }
        else {
          echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><i style='color:red; border:2px solid black; border-radius:50%;' class='fa fa-circle' aria-hidden='true'></i></td></tr>";
        }
        }
        echo "</table>";

         ?>
        </div>
        </div>

<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  </body>
</html>
