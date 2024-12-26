<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Information Submission</title>

</head>

<body>

<h2>Submitted Information</h2>

<?php

// check if form is submitted

if ($ SERVER["REQUEST METHOD"] = "POST") (

// Collect form data using PHP $ POST superglobal

$name htmlspecialchars($_POST['name']);

Sage htmlspecialchars($ POST['age']);

$department htmlspecialchars($ POST['department']);

$roll htmlspecialchars($_POST['roll']);

Scgpa htmlspecialchars($ POST['cgpa']);

// Display submitted information

echo "<p><strong>Name:</strong> $name</p>";

echo "<p><strong>Age:</strong> $age</p>";

echo "<p><strong>Department:</strong> $department</p>";

echo "<p><strong>Roll Number:</strong> $roll</p>";

echo "<p><strong>CGPA:</strong> $cgpa</p>";

} else {

// If form is not submitted, display a message

echo "<p>No data submitted.</p>";
}

?>

</body>

</html>