<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login-style.css">
    <title>Login By Student</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="#" method="POST">
        <div class="form">
        <input type="text" name="username" required class="textfiled" placeholder="UserName">
        <input type="password" name="password" required class="textfiled" placeholder="Password">
        
        <div class="forgetpass"><a href="#" class="link"
        onclick="message()"
        >Forget Password ?</a></div>
        <input type="submit" name="login" value="Login" class="btn">
        <div class="signup">New Member ?<a href="StRegister.php" class="link">signup Student</a>
        </div>
    </div>
    </div>
    </form>
    <script>
        function message()
        {
            alert("Password Ko Yadh Rakho");
        }
    </script>
</body>

</html>
<?php

include("connection.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM form WHERE email ='$username' && password ='$pwd' ";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;
    if($total == 1)
    {
        $_SESSION['user_name'] = $username;
        header('location:display.php');
    }
    else
    {
        echo "Login Failed";
    }
}
?>