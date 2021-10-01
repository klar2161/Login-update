<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<nav>
    <div class="wrapper">
        <a href="index.php"><img src="img/RPC-JP_Logo.png" alt="Logo" class="logo"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <?php

                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";
                }

            ?>
            
        </ul>

    </div>
</nav>


<div class="wrapper-info">