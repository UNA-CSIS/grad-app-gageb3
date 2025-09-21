<?php
session_start(); // Resume or start a session

// If first and last name were posted, save them in the session
if (isset($_POST['first']) && isset($_POST['last'])) {
    $_SESSION['first'] = $_POST['first'];
    $_SESSION['last'] = $_POST['last'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Select Courses</title>
</head>
<body>
    <!-- Display the user’s name pulled from the session -->
    <h2><?php echo($_SESSION['first'] . " " . $_SESSION['last']); ?></h2>

    <!-- Course selection form -->
    <!-- Posts selected courses to accomplishments.php -->
    <form action="accomplishments.php" method="POST">
        <input type="checkbox" id="oop" name="oop" value="1">
        <label for="oop">Object-oriented Programming</label><br>

        <input type="checkbox" id="analysisdesign" name="analysisdesign" value="1">
        <label for="analysisdesign">Systems Analysis and Design</label><br>

        <input type="checkbox" id="advprogramming" name="advprogramming" value="1">
        <label for="advprogramming">Advanced Programming</label><br>

        <input type="checkbox" id="networking" name="networking" value="1">
        <label for="networking">Introduction to Networking</label><br>

        <input type="checkbox" id="security" name="security" value="1">
        <label for="security">Introduction to Computer Security</label><br>

        <!-- Button submits courses to next page -->
        <input type="submit" name="submit_courses" value="Continue">
    </form>
</body>
</html>
