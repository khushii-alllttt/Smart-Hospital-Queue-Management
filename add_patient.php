<head>
    <title>Hospital Queue</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO patient (name, age) VALUES ('$name', '$age')";
    mysqli_query($conn, $sql);

    $token = mysqli_insert_id($conn);

    echo "<h2>Your Token Number: $token</h2>";
    echo "<a href='index.php'>Go Back</a>";

    header("Location: token_slip.php");
exit();

}
?>
