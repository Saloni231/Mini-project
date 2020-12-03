<?php
    session_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $dob = $_POST['dob'];
    $gender = $_POST['gen'];
    $mob = $_POST['mobile'];

    $conn = new mysqli('localhost','root','','user_login');
    if($conn->connect_error)
    {
        die("Connection falied : ".$conn->connect_error);
    }
    else
    {
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['user'] = $user;
        $_SESSION['dob'] = $dob;
        $_SESSION['gender'] = $gender;
        $_SESSION['mobile'] = $mob;
        $stmt = $conn->prepare("Insert into rest(fname,lname,email,username,pass,cpass,dob,gender,mobile)values(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssi",$fname,$lname,$email,$user,$pass,$cpass,$dob,$gender,$mob);
        $stmt->execute();
        echo'<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> You have sucessfully Logged In.
                </div>';
        include 'homepage.php';
        $stmt->close();
        $conn->close();
    }

?>  