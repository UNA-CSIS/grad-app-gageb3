<?php
session_start(); // Resume session to keep user’s data

// If the courses form was submitted, build an array of selected courses
if (isset($_POST['submit_courses'])) {
    $courses = array();
    // Check which courses were selected in the form and add their full names to the $courses array
    if (isset($_POST['oop'])) {
        $courses[] = "Object-oriented Programming"; 
    }
    if (isset($_POST['analysisdesign'])) { 
        $courses[] = "Systems Analysis and Design"; 
    }
    if (isset($_POST['advprogramming'])) { 
        $courses[] = "Advanced Programming"; 
    }
    if (isset($_POST['networking'])) { 
        $courses[] = "Introduction to Networking"; 
    }
    if (isset($_POST['security'])) { 
        $courses[] = "Introduction to Computer Security"; 
    }

    // Save selected courses in the session
    $_SESSION['courses'] = $courses;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accomplishments</title>
</head>
<body>
    <!-- Display user’s full name -->
    <h2><?php echo($_SESSION['first'] . " " . $_SESSION['last']); ?></h2>

    <!-- Form for entering accomplishments -->
    <!-- Sends accomplishments to confirmation.php -->
    <form action="confirmation.php" method="POST">
        <label for="accomplishments">Personal Accomplishments:</label><br>
        <textarea id="accomplishments" name="accomplishments" rows="5" cols="50" placeholder="Type your accomplishments here..." required></textarea><br>
        <input type="submit" value="Continue">
    </form>
</body>
</html>
