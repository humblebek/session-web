<?php
session_start();

 include "data.php";

if (isset($_SESSION["username"])) {
    header("Location: index.php");
    
}

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

            for($i=0; count($users); $i++){
                if ($username == $users[$i][2] && $password == $users[$i][3]) {
                    $_SESSION["username"] = $username;
                    header("Location: index.php");
                
                }else{ 
                    header("Location: login.php"); 
                }
            }
            
               
            
            
    }
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="margin-top: 150px;  margin-left: 550px;">
        <h1>Login</h1>
        <?php if (isset($error)) {
            echo "<p>$error</p>";
        } ?>
        <form method="POST" action="" style="padding:20px">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>