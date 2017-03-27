<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
        header("Location: login.php");
        
    }
    
    ?>



<!-- addentry.html
     A form to add an entry to the blog
     -->
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title> Add an entry to Alexander Kanouni&apos;s blog!
      </title>
      <style>
          form label{
              display: inline-block;
              vertical-align: top;
              width: 40px;
          }
        form{
            width: 600px;
        }
      </style>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <form action="addentry.php" method="get">
          <p>
            <h2> Add an entry to Alexander Kanouni&apos;s blog! </h2>
          </p>
        
          <p>
          Instructions: Enter a title and body for your blog entry. In the body, you can use simple HTML formatting elements, such as &lt;b&gt; (bold) and &lt;i&gt; (italic) as well as the hyperlink "anchor" element &lt;a&gt;.
          </p>
          <p>
            <label>Title:</label> <input type="text" name = "title" size=40 />
          </p>
          <p>
          <label>Body:</label> <textarea name="entry" rows="5" cols="40"></textarea>
          </p>
          <p>
          <label> </label> <input type ="submit" name ="do it" value="Add Entry" />
          <input type ="reset" value="Clear" />
          </p>
      </form>
  </body>
</html>
