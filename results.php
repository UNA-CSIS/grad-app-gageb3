<?php
session_start(); // Resume session

// Retrieve stored data
$first = $_SESSION['first'];
$last = $_SESSION['last'];
$courses = $_SESSION['courses'];
$accomplishments = $_SESSION['accomplishments'];

// Function to determine acceptance
// Conditions:
// - Must mention "PHP" in accomplishments
// - Must have taken at least half of the available courses
function checkAcceptance($accomplishments, $totalCourses, $coursesTaken) {
    $hasPHP = stripos($accomplishments, "PHP") !== false; // Case-insensitive search
    $hasEnoughCourses = ($coursesTaken / $totalCourses) >= 0.5; // 50% or more
    return $hasPHP && $hasEnoughCourses;
}

$totalCourses = 5;  // Total possible courses
$coursesTaken = count($courses); // Count how many were selected
$isAccepted = checkAcceptance($accomplishments, $totalCourses, $coursesTaken); // Run acceptance logic
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
    <h2>Application Results</h2>

    <!-- Show name -->
    <p><strong>Name:</strong> <?php echo($first . " " . $last); ?></p>

    <!-- Show courses taken -->
    <p><strong>Courses Taken:</strong><br>
        <?php echo implode("<br>", $courses); ?>
    </p>

    <!-- Show accomplishments -->
    <p><strong>Accomplishments:</strong><br>
        <?php echo($accomplishments); ?>
    </p>

    <!-- Show final acceptance/rejection result -->
    <h3>
    <?php 
        if ($isAccepted) {
            echo "You are accepted for a phone interview";
        } else {
            echo "Sorry, your application was rejected";
        }
    ?>
    </h3>
</body>
</html>
