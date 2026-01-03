<head>
    <title>Hospital Queue</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

