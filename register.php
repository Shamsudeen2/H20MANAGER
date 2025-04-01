<?php

session_start();

include 'connet.php';

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword  == $password;
    $password = md5($password);
    
      
   

    $checkemail = "SELECT * FROM `createaccount` WHERE email = '$email'";
    $result = mysqli_query($conn, $checkemail);
    $num = mysqli_num_rows($result);
    if ($num == 1) {

        echo "Email already exist";
        

    } else {
        $sql = "INSERT INTO `createaccount` (`fname`, `email`, `password`) VALUES ('$fname', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Data not inserted";
        }
    }



   
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $checkemail = "SELECT * FROM `createaccount` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $checkemail);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['email'] = $email;
        header("Location: dashbord.php");
    } else {
        echo "Email and password not match";
    }
}

?>