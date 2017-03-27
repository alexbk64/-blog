<?php
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
        print("you are not logged in");
        header("Location: http://webprojects.eecs.qmul.ac.uk/abk31/blog/login.html");
    }
    else {
        print("you are logged in");
        header("Location: http://webprojects.eecs.qmul.ac.uk/abk31/blog/viewBlog.html");
    }
    
    
?>
