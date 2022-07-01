<?php require("login.class.php") ?>
<?php 
    if(isset($_POST['submit'])){
        $user = new LoginUser($_POST['username'], $_POST['password']);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Profile</title>
<link rel="stylesheet" href="styles_login_signup.css">

</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <p>Welcome To Profile</p>
        <input type="username" placeholder="Username"name="username"><br>
        <input type="password" placeholder="Password"name="password"><br>
        <input type="submit" name="submit"value="Sign in"><br>
 <span class="txt1">
                        Don't have an account?
                    </span>
                    <a class="txt2" href="index1.php"> Sign Up </a><br><br>&nbsp;&nbsp;
        <!--<a href="#">Forgot Password?</a> -->

        <p class="error"><?php echo @$user->error ?></p>
        <p class="success"><?php echo @$user->success ?></p>
    </form>

    <div class="drops">
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
    </div>

</div>


</body>
</html>