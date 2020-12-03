<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
    session_start();
    $user = $_POST['Username'];
    $pass = $_POST['Password'];
    $conn = new mysqli('localhost','root','','user_login');
    if($conn->connect_error)
    {
        die("Connection falied : ".$conn->connect_error);
    }
    else
    {
        $result = "";
        $result = mysqli_query($conn,"select * from rest where username = '$user' and pass = '$pass'");
        $row = mysqli_fetch_array($result);
        if($row != "")
        {
            if($row['username'] == $user && $row['pass'] == $pass)
            {
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user'] = $row['username'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['mobile'] = $row['mobile'];
                echo'<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> You have sucessfully Logged In.
                </div>';
                include 'homepage.php';
            }
        }
        else
        {
            echo'<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Failure!</strong> Wrong Username or Password.
              </div>';
            include 'loginpage.html';
        }
    }

?>