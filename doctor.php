<?php error_reporting(E_ALL ^ E_NOTICE); session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Smart Health Consultant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="doctor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </head>
  <style>
    body{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    background-color: rgb(30, 144, 255);}
    html {
box-sizing: border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}
    </style>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="homepage.php" style="font-size: 25px;">Smart Health Consultant</a>
    
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="homepage.php"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg> My Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="Mydetails" href="#"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="black" width="24" height="24"><g><rect fill="none" height="24" width="24"/></g><g><g><circle cx="10" cy="8" r="4"/><path d="M10.35,14.01C7.62,13.91,2,15.27,2,18v2h9.54C9.07,17.24,10.31,14.11,10.35,14.01z"/><path d="M19.43,18.02C19.79,17.43,20,16.74,20,16c0-2.21-1.79-4-4-4s-4,1.79-4,4c0,2.21,1.79,4,4,4c0.74,0,1.43-0.22,2.02-0.57 L20.59,22L22,20.59L19.43,18.02z M16,18c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C18,17.1,17.1,18,16,18z"/></g></g></svg>Search Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="disease.php"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M16,15h-3v3h-2v-3H8v-2h3v-3h2v3h3V15z"/></g></g></svg> Disease Predection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="appointment.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24" height="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg> View Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="aboutus.html"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="black" width="24" height="24"><rect fill="none" height="24" width="24"/><g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/></g></svg> About Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M3 3.25c0-.966.784-1.75 1.75-1.75h5.5a.75.75 0 010 1.5h-5.5a.25.25 0 00-.25.25v17.5c0 .138.112.25.25.25h5.5a.75.75 0 010 1.5h-5.5A1.75 1.75 0 013 20.75V3.25zm16.006 9.5l-3.3 3.484a.75.75 0 001.088 1.032l4.5-4.75a.75.75 0 000-1.032l-4.5-4.75a.75.75 0 00-1.088 1.032l3.3 3.484H10.75a.75.75 0 000 1.5h8.256z"></path></svg> Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
    <div>
    <div class="card-header" style=" margin: 10px; padding: 15px; font-size: 30px; font-weight: bolder; color: black; font-family: 'Times New Roman', Times, serif;">Search Doctor</div>
        <div class="content" id="demo">
            <form method="POST" action="" >
                <input type="text" name="doc" id="doc" placeholder="Search For Doctor">
                <input type="submit" value="Search"  id="search" class="btn btn-primary">
            </form>
            <?php
              session_start();
              $name = $_POST['doc'];
              $conn = new mysqli('localhost','id15578246_abc','RU}B^tu#5-ijiv^j','id15578246_website');
              if($conn->connect_error)
              {
                die("Connection falied : ".$conn->connect_error);
              }
              else
              {
                if($name != "")
                {
                  $result = "";
                  $result = mysqli_query($conn,"select * from doctor where name = '$name'");
                  $row = mysqli_fetch_array($result);
                  if($row != "")
                  {
                    if($row['name']==$name)
                    {
                      echo'<br><h3 style = " text-transform: capitalize;">Doctor Name : '.$row['name'];
                      echo'<br><br>Degree : '.$row['degree'];
                      echo'<br><br>Specialisation : '.$row['specialisation'];
                      echo'</h3><br><h3>Email : '.$row['email'];
                      echo'<br><br>Mobile : '.$row['mobile'];
                      echo'</h3>';
                      echo'<br><a href="make_appointment.php"><input type="button" value="Make an Appointment" id="appointment" class="btn btn-primary" style="width:max-content"></a>';
                    }
                  }
                  else
                  {
                    echo'No Data Found';
                  }
                }
              }
            ?>
        </div>
    </div>
  </body>
</html>