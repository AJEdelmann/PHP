<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation against PHP</title>
</head>
<body>
    <?php
    $users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];      
    $feedback = "";
    $message = "You're logged in!";
    $validation_error = "* Incorrect username or password.";
    $username = "";

    if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(isset($users[$username]) && $users[$username] === $password) {
        $feedback = $message;
    } else {
        $feedback = $validation_error;
    }
    }

    ?>
    
    <h3>Welcome back!</h3>
    <form method="post" action="">
        Username:<input type="text" name="username" value="<?php echo $username;?>">
        <br>
        Password:<input type="text" name="password" value="">
        <br>
        <input type="submit" value="Log in">
    </form>
    <span class="feedback"><?= $feedback;?></span>
</body>
</html>