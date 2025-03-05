<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn and sugnup</title>
    <link rel="stylesheet" href="asset\maint.css">
</head>

<body>


    <section style="display:none;" id="SignUp"> 
        <h1>Sign Up</h1>
        <form action="register.php" method="POST">
            <label>Full Name</label><br>
            <input type="text" name="fname" placeholder="Enter Full Name"><br><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <label>Comform Password</label><br>
            <input type="Password" name="Cpassword" placeholder="Comform Password"><br><br>
            <input type="submit" value="Sign Up" class="submit" action="dashbord.php">
            <p>----------Or----------</p>
            <p class="otheropption">Already have account <a href="#" id="otheropptionIn">Sign In</a></p>
        </form>
    </section>

    <section id="SignIn">
        <h1>Sign In</h1>
        <form action="register.php" method="POST">
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input type="submit" value="Sign In" class="submit" action="dashbord.php">
            <p>----------Or----------</p>
            <p class="otheropption">Don't have account <a href="#" id="otheropptionUp">Sign Up</a></p>
        </form>
    </section>



    <script type="text/javascript" src="asset\script.js"></script>
</body>

</html>