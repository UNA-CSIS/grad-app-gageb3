<?php
session_start(); // Start the session to allow storing/retrieving user data
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Form for collecting first and last name -->
        <!-- Submits data to courses.php -->
        <form action="courses.php" method="POST">
            First Name: <input type="text" name="first" required>
            <br>
            Last Name: <input type="text" name="last" required>
            
            <br>
            <input type="submit">
        </form>
    </body>
</html>

