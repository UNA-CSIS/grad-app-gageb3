<?php
session_start(); // Resume session

// Save accomplishments from the submitted form into the session
$_SESSION['accomplishments'] = $_POST['accomplishments'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>
    <h2>Confirm Your Information</h2>

    <!-- Display full name -->
    <p><strong>Name:</strong> <?php echo($_SESSION['first'] . " " . $_SESSION['last']); ?></p>

    <!-- Display selected courses or message if none -->
    <p><strong>Courses:</strong><br>
        <?php 
            echo implode("<br>", $_SESSION['courses']); // Show courses as line-separated
        ?>
    </p>

    <!-- Display accomplishments -->
    <p><strong>Accomplishments:</strong><br>
        <?php echo($_SESSION['accomplishments']); ?>
    </p>

    <!-- Confirmation form, continues to results.php -->
    <form action="results.php" method="POST">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
