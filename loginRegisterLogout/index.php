<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main">
    <h1>Log in</h1>
    <i>let's enjoy</i><br><br>
    <form action="login.php" method="POST">


    <?php if(isset($user_error)){
        echo $user_error;
    } ?>


    <input type="text" name="username" id="username" placeholder="username"><br>


    <?php if(isset($pass_error)){
        echo $pass_error;
    } ?>

    
    <input type="password" name="password" id="password" placeholder="password"><br>
    <input type="submit" name="submit" id="submit" value="Log in"><br>
    <h3>Or</h3><br>
    <a href="register.php" id="login">Register</a>
    <form>
</div>
</body>
</html>