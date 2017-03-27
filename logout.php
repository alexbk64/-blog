<?php
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == true) {
        $_SESSION['logged_in'] = false;
        session_unset();
        session_destroy(); 
        header("Location: login.php");
        
    }
    
    ?>

<h2> you are still logged in </h2>
