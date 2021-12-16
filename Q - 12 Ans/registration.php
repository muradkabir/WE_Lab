<?php
    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        if(!empty($name) && !empty($email) && !empty($password) )
        {
            $query = "insert into users (user_name,user_email,user_password) values ('$name','$email','$password')";

            mysqli_query($con,$query);
        }else
        {
            echo("Please Enter Some Valid information");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <div class="registration">
        <h1>Registration Page</h1>

        <form method="post">
            <input type="text" name="user_name" placeholder="Enter Your Name.."><br><br>
            <input type="text" name="user_email" placeholder="Enter Your Email.."><br><br>
            <input type="text" name="user_password" placeholder="Enter Your Password.."><br><br>
            <button id="signup" type="submit">Signup</button><br><br>
        </form>
    </div>
</body>
</html>