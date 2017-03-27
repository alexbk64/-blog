<!DOCTYPE html>

<?php
    session_start();

    $username = "abk31";
    $password = "password";
      
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) 
    {
          header("Location: addentry.html");
      }
    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
        if ($_POST['username'] == $username && $_POST['password'] == $password)
        {
            $_SESSION['logged_in'] = true;
            header("Location: addentry.html");
        }
    }
       


?>


<!-- login.html
     The log-in page for my blog
     -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login to Alexander Kanouni&apos;s Blog</title>
        <style>
            form label{
                display: inline-block;
                width: 75px;
            }
            form {
                border: 3px solid #f1f1f1;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p>
            <h2> Log in to add an entry!  </h2>
        </p>
    <!-- Create text boxes with labels -->
    
        <form action="login.php" method="post"> <!-- process login.php when submit is pressed-->
            <p>
                <label>Username: </label>
                <input type="text" placeholder="Enter Username" name="username" size="40" required/><br/>
                <label>Password: </label>
                <input type="password" placeholder="Enter Password" name="password" size="40" maxlength="40" required/><br/>
                <label> </label>
                <input type="submit" name="do it" value="Log in">
                        
            </p>
        </form>
        
    
        
        
    </body>
</html> <!-- end -->
