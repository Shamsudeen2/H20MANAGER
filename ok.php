

<?php  



session_start();
if (isset($_SESSION['email'])) {
    header("Location: dashbord.php");
}

$errormsg = "sjajsdjshdj";

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword  == $password;
    $password = md5($password);

    echo "$errormsg";

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn and sugnup</title>
    <link rel="stylesheet" href="asset..\maint.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    

</head>

<body>


    <section style="display:none;" id="SignUp"> 
        <h1>Sign Up</h1>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        ok  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <form action="register.php" method="POST">
            <label>Full Name</label><br>
            <input type="text" name="fname" placeholder="Enter Full Name"><br><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <label>Comform Password</label><br>
            <input type="Password" name="Cpassword" placeholder="Comform Password"><br><br>
            <input type="submit" value="Sign Up" name="signup" class="submit" action="dashbord.php">
            <p>----------Or----------</p>
            <p class="otheropption">Already have account <a href="#" id="otheropptionIn">Sign In</a></p>
        </form>
    </section>

    <section id="SignIn">
        <h1>Sign In</h1>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        ok  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <form action="register.php" method="POST">
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input type="submit" value="Sign In" name="signin" class="submit" action="dashbord.php">
            <p>----------Or----------</p>
            <p class="otheropption">Don't have account <a href="#" id="otheropptionUp">Sign Up</a></p>
        </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="asset\script.js"></script>
</body>

</html>
