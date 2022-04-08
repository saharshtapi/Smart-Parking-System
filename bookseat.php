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
    <link rel="stylesheet" href="headstyle.css" />
    <title>Spot Booking</title>
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
           Please select your preferred day and corresponding slot.
          </p>
        </div>
        </div>
      </div>
    </div>
    <form action="/sps/action_page.php">
      <input id="loc"name="location" value="" hidden="hidden" type="text">
      <script type="text/javascript">
      var z=window.location.search;
      z=z.split('=')[1];
        console.log(z);
        document.getElementById('loc').value=z;
      </script>
      <div class="new1">
      <div class="park-container">
        <label style="color: #6C63FF;"> Select a Day:</label>
        <select id="park" name="day" onchange="getday()">
          <option value="---">---</option>
          <option value="mon">MON</option>
          <option value="tue">TUE</option>
          <option value="wed">WED</option>
          <option value="thu">THU</option>
          <option value="fri">FRI</option>
          <option value="sat">SAT</option>
          <option value="sun">SUN</option>
        </select>
      </div>
      <script type="text/javascript">
      var x=document.cookie;
      x= x.split(";")[0];
      x=x.split("=")[1];
      console.log(x);
       document.getElementById("park").value=x;
      function getday(){
        var str= document.getElementById("park").value;
        console.log(str);
        // localStorage.setItem("day",str);
        document.cookie="day="+str;
        location.reload();
      }

      </script>
      <?php
      $tmp=$_COOKIE["day"];
      $tmp2=$_GET['location'];
      $sql="SELECT spot from bookings where day='$tmp' AND location='$tmp2' AND status!='2'";
      $result=mysqli_query($conn, $sql);
      $booked=[];
      while($row=mysqli_fetch_row($result))
      {
        array_push($booked,$row[0]);
      }
      $len=count($booked);
       ?>

      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>Available</small>
        </li>
        <li>
          <div class="seat sold"></div>
          <small>Booked</small>
        </li>
      </ul>
      <div class="container">
        <div class="row">
          <button class="seat" name="spot" value="1" id="1"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="2" id="2"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="3" id="3"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="4" id="4"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="5" id="5"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="6"id="6"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="7"id="7"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="8"id="8"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="9"id="9"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="10"id="10"></button>
        </div>
        <hr>
        <div class="row">
          <div class="row">
          <button class="seat" name="spot" value="11"id="11"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="12"id="12"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="13"id="13"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="14"id="14"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="15"id="15"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="16"id="16"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="17"id="17"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="18"id="18"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="19"id="19"></button>
          <div class="vl"></div>
          <button class="seat" name="spot" value="20"id="20"></button>
        </div>
      </div>
    </form>
    <script type="text/javascript">
      len='<?php echo "$len"; ?>';
      console.log(len);

      booked= '<?php  foreach($booked as $booked){ echo $booked." ";}?>';
      array=booked.split(" ");
      console.log(array[1]);
      for(var i=0;i<len;i++){
        document.getElementById(array[i]).style.backgroundColor="red";
      }
    </script>

  </div>
  </body>
</html>
